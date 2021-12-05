import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { ColDef, GridApi, GridReadyEvent, RowDoubleClickedEvent } from 'ag-grid-community';
import { takeUntil } from 'rxjs/operators';
import { StationSearchService } from '../../../service/station-search.service';
import { ApiResponseData } from '../../../model/api/api-response.interface';
import { Router } from '@angular/router';
import { StationSearchResponse } from '../../../model/api/station-search.response';

@Component({
  selector: 'app-search-result-table',
  templateUrl: './search-result-table.component.html',
  styleUrls: ['./search-result-table.component.scss']
})
export class SearchResultTableComponent implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();

  public searchedStations: ApiResponseData<StationSearchResponse[]> | undefined = undefined;
  public loading = true;
  public error: any;

  columnDefs: ColDef[] = [
    {field: 'station_code', headerName: 'Kod Stacji', cellClass: 'navigation-cell'},
    {field: 'station_name', headerName: 'Nazwa Stacji'},
    {field: 'indicator', headerName: 'Zanieczyszczenie'},
    {field: 'measurement_type', headerName: 'Typ pomiaru'}
  ];

  rowData: StationSearchResponse[] = [];
  private gridApi: GridApi | any;

  constructor(private router: Router,
              private stationSearchService: StationSearchService) {
  }

  public ngOnInit(): void {
    this.stationSearchService.getSearchedStations()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(response => {
        if (response != null) {
          this.searchedStations = response;
          this.rowData = response.data;
          this.loading = false;
          this.gridApi?.sizeColumnsToFit();
        }
      }, error => {
        this.error = error;
        this.loading = false;
      })
  }

  public onGridReady(event: GridReadyEvent): void {
    this.gridApi = event.api;
    setTimeout(() => {
      this.gridApi?.sizeColumnsToFit();
    }, 1000);
  }

  public onRowDoubleClicked(event: RowDoubleClickedEvent): void {
    this.router.navigateByUrl('/dashboard/detail/station/toppolluted');
    // this.router.navigateByUrl(`/dashboard/detail/station/${event.data.station_code}`);
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }

}
