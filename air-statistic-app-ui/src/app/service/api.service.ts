import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { QueryParams } from '../utils/query-params';
import { Observable } from 'rxjs/internal/Observable';
import { ApiEndpointProviderService } from './api-endpoint-provider.service';
import { StationMeasurementDto, } from '../model/api/station-measurement.dto';
import { map } from 'rxjs/operators';
import { ApiResponse, ApiResponseData } from '../model/api/api-response.interface';
import { StationDto } from '../model/api/station.dto';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  constructor(private httpClient: HttpClient,
              private apiEndpointProvider: ApiEndpointProviderService) {
  }

  public search(value: SearchRequest): Observable<SearchResponse> {
    const path = this.apiEndpointProvider.getPath('/search');
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<SearchResponse>(path, {params});
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

}

interface SearchRequest {
  station: string;
  status: string;
}

interface SearchResponse {
  status: string;
}


