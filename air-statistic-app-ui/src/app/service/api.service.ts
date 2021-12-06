import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { QueryParams } from '../utils/query-params';
import { Observable } from 'rxjs/internal/Observable';
import { ApiEndpointProviderService } from './api-endpoint-provider.service';
import { StationMeasurementDto, } from '../model/api/station-measurement.dto';
import { map } from 'rxjs/operators';
import { ApiResponse, ApiResponseData } from '../model/api/api-response.interface';
import { StationDto } from '../model/api/station.dto';
import { StationSearchResponse } from '../model/api/station-search.response';
import { StationSearchRequest } from '../model/api/search.request';
import { VoivodeshipDto } from '../model/api/voivodeship.dto';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  constructor(private httpClient: HttpClient,
              private apiEndpointProvider: ApiEndpointProviderService) {
  }

  public searchStations(searchRequest: StationSearchRequest, page = 1): Observable<ApiResponseData<StationSearchResponse[]>> {
    const path = this.apiEndpointProvider.getPath(`/getStationsAdv?page=${page}`);
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.post<ApiResponse<ApiResponseData<StationSearchResponse[]>>>(path, searchRequest, {params})
      .pipe(map(response => response.data));
  }

  public getStationDetailMeasurements(id: string): Observable<StationMeasurementDto[]> {
    // const path = `${this.apiEndpointProvider.getPath('/measurements/station')}/${id}`;
    const path = `${this.apiEndpointProvider.getPath('/station/a')}/${id}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<StationMeasurementDto[]>>(path, {params})
      .pipe(map(response => response.data));
  }

  public getStationMeasurements(id: string): Observable<StationMeasurementDto[]> {
    // const path = `${this.apiEndpointProvider.getPath('/measurements/station')}/${id}`;
    const path = `${this.apiEndpointProvider.getPath('/measurements')}/${id}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<StationMeasurementDto[]>>(path, {params})
      .pipe(map(response => response.data));
  }

  public getStations(): Observable<ApiResponseData<StationDto[]>> {
    const path = this.apiEndpointProvider.getPath('/station');
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<ApiResponseData<StationDto[]>>>(path, {params})
      .pipe(map(response => response.data));
  }

  public getVoivodeships(): Observable<string[]> {
    const path = this.apiEndpointProvider.getPath('/voivodeships');
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<VoivodeshipDto[]>>(path, {params})
      .pipe(map(response => response.data),
        map(array => array.map(v => v.voivodeship)));
  }
}


