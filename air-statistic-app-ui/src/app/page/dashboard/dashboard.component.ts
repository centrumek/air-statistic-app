import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { StationSearchService } from '../../service/station-search.service';
import { Observable } from 'rxjs/internal/Observable';
import { ApiResponseData } from '../../model/api/api-response.interface';
import { StationSearchResponse } from '../../model/api/station-search.response';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {

  public searchedStations$: Observable<ApiResponseData<StationSearchResponse[]> | null> | null;

  constructor(private router: Router,
              private stationSearchService: StationSearchService) {
    const searchedStations = this.stationSearchService.getSearchedStations();
    this.searchedStations$ = searchedStations ? searchedStations : null;
  }

  public ngOnInit(): void {
  }

  public navigateToDetailPage(): void {
    this.router.navigateByUrl('/dashboard/detail/station/toppolluted')
  }

}
