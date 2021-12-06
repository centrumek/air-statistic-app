import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { ColDef, GridApi, GridReadyEvent, PaginationChangedEvent, RowDoubleClickedEvent } from 'ag-grid-community';
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
  public paginationPageSize = 10;

  columnDefs: ColDef[] = [
    {field: 'station_code', headerName: 'Kod Stacji', cellClass: 'navigation-cell'},
    {field: 'station_name', headerName: 'Nazwa Stacji'},
    {field: 'indicator', headerName: 'Zanieczyszczenie'},
    {field: 'stand_code', headerName: 'Kod stanowiska'}
  ];

  rowData: StationSearchResponse[] = [];
  private gridApi: GridApi | any;

  constructor(private router: Router,
              private stationSearchService: StationSearchService) {
    this.rowData = [];
  }

  public ngOnInit(): void {
    this.stationSearchService.getSearchedStations()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(response => {
        if (response != null) {
          this.paginationPageSize = response.per_page;
          let rowData = [];
          this.searchedStations = response;

          for (let i = 0; i < response.total; i++) {
            rowData.push({
              indicator: '',
              stand_code: '',
              station_code: '',
              station_name: '',
            });
          }

          for (let i = response.from - 1, j = 0; i < response.to; i++, j++) {
            rowData[i] = response.data[j];
          }
          this.rowData = rowData;

          this.loading = false;
          this.gridApi?.hideOverlay();
          this.gridApi?.sizeColumnsToFit();
        } else {
          this.rowData = [];
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
    this.router.navigateByUrl(`/dashboard/detail/station/${event.data.station_code}/diagram/${event.data.stand_code}`);
  }

  onPaginationChanged(event: PaginationChangedEvent) {
    if (this.gridApi && event.newPage) {
      this.gridApi.showLoadingOverlay();
      const currentPage = this.gridApi.paginationGetCurrentPage() + 1;
      this.stationSearchService.loadStations(currentPage);
    }
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
    this.stationSearchService.setSearchedStations(null);
  }

}
