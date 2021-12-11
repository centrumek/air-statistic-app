import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { DetailPageService } from '../detail-page.service';
import { ActivatedRoute } from '@angular/router';
import { takeUntil } from 'rxjs/operators';
import { StandMeasurement } from 'src/app/model/stand-measurements';
import { ColDef, GridApi, GridReadyEvent } from 'ag-grid-community';

@Component({
  selector: 'app-detail-table-page',
  templateUrl: './detail-table-page.component.html',
  styleUrls: ['./detail-table-page.component.scss']
})
export class DetailTablePageComponent implements OnInit, OnDestroy {

  public standCode: string;
  public standMeasurementArray?: StandMeasurement[] | null;
  public stand?: StandMeasurement | null;
  private unsubscribe = new EventEmitter<boolean>();
  public paginationPageSize = 100;

  public columnDefs: ColDef[] = [
    {
      field: 'date', headerName: 'Data', sortable: true,
      comparator: (valueA, valueB) => {
        if (valueA == valueB) return 0;
        return (new Date(valueA) > new Date(valueB)) ? 1 : -1;
      }
    },
    {field: 'value', headerName: 'Wartość Pomiaru', sortable: true}
  ];

  public rowData: {
    date: string,
    value: number | undefined
  }[] = [];
  private gridApi: GridApi | any;

  public loaded = false;
  public noData = false;

  constructor(private detailPageService: DetailPageService,
              private route: ActivatedRoute,) {
    this.standCode = this.route.snapshot.params['standCode'];
    this.rowData = [];
  }

  public ngOnInit(): void {
    this.detailPageService.getStandMeasurements(this.standCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {
        this.standMeasurementArray = data.map(chart => {
          return {
            stand_code: chart.stand_code,
            indicator_code: chart.indicator_code,
            indicator: chart.indicator,
            measurement_values: chart.measurement_values.split(',').map(Number),
            measurement_dates: chart.measurement_dates.split(','),
          }
        });
        this.stand = this.standMeasurementArray[0];
        this.rowData = this.stand?.measurement_dates.map((date, index) => {
          return {
            date: date,
            value: this.stand?.measurement_values[index],
          }
        });
        this.loaded = true;
      }, error => {
        this.loaded = true;
        this.noData = true;
        console.log(error);
      });
  }

  public onGridReady(event: GridReadyEvent): void {
    this.gridApi = event.api;
    setTimeout(() => {
      this.gridApi?.sizeColumnsToFit();
      const sortModel = [
        {colId: 'date', sort: 'desc'}
      ];
      this.gridApi.setSortModel(sortModel)
    }, 300);
  }


  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
