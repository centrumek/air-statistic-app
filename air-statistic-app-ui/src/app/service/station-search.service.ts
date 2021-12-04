import { Injectable } from '@angular/core';
import { StationSearchRequest } from '../model/api/search.request';
import { StationSearchFormModel } from '../page/dashboard/search/station-search-form.interface';
import { StationSearchResponse } from '../model/api/station-search.response';
import { ApiResponseData } from '../model/api/api-response.interface';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { Observable } from 'rxjs/internal/Observable';

@Injectable()
export class StationSearchService {

  private searchedStations = new BehaviorSubject<ApiResponseData<StationSearchResponse[]> | null>(null);

  public static prepareSearchRequest(formData: StationSearchFormModel): StationSearchRequest {
    return {
      adress: formData.address,
      voivodeship: formData.voivodeship,
      indicator: formData.indicator,
      location: formData.location,
      start_date: formData.measurementStartDate,
      close_date: formData.measurementEndDate,
      measurement_type: formData.measurementType,
    }
  }

  public setSearchedStations(response: ApiResponseData<StationSearchResponse[]>) {
    this.searchedStations.next(response);
  }

  public getSearchedStations(): Observable<ApiResponseData<StationSearchResponse[]> | null> {
    return this.searchedStations.asObservable();
  }
}
