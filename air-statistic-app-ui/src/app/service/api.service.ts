import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { QueryParams } from '../utils/query-params';
import { Observable } from 'rxjs/internal/Observable';
import { ApiEndpointProviderService } from './api-endpoint-provider.service';
import { StationMeasurementDto, } from '../model/api/station-measurement.dto';
import { map } from 'rxjs/operators';
import { ApiResponse, ApiResponseData } from '../model/api/api-response.interface';
import { StationDto } from '../model/api/station.dto';
import { StandMeasurementDto } from '../model/api/stand-measurement.dto';
import { StationSearchResponse } from '../model/api/station-search.response';
import { StationSearchRequest } from '../model/api/search.request';
import { VoivodeshipDto } from '../model/api/voivodeship.dto';
import { of } from 'rxjs/internal/observable/of';
import { PollutionStationMeasurementsDto } from '../model/api/station-measurements.dto';
import { StationCords } from '../model/api/station-cords.dto';

const TOP_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  address: 'ul. Juliusza Słowackiego 40',
  location: 'Warszawa',
  values: [17.3, 14.2, 35.8, 17.9, 15.5, 45.0],
  stationName: '',
  value: 14.2,
};

const LEAST_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  address: 'ul. Juliusza Słowackiego 40',
  location: 'Kraków',
  values: [17.3, 14.2, 35.8, 17.9, 15.5, 45.0],
  stationName: '',
  value: 95.0,
};

const MIDDLE_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  address: 'ul. Juliusza Słowackiego 40',
  location: 'Gdańsk',
  values: [17.3, 14.2, 35.8, 17.9, 15.5, 45.0],
  stationName: '',
  value: 35.8,
};

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

  public getTopPolluted(): Observable<PollutionStationMeasurementsDto> {
    const path = `${this.apiEndpointProvider.getPath('/measurements/toppolluted')}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return of(TOP_POLLUTION_STATION_MEASUREMENTS_MOCK);
    // TODO uncomment after backend changes
    // return this.httpClient.get<ApiResponse<PollutionStationMeasurementsDto>>(path, {params})
    //   .pipe(map(response => response.data));
  }

  public getLeastPolluted(): Observable<PollutionStationMeasurementsDto> {
    const path = `${this.apiEndpointProvider.getPath('/measurements/leastpolluted')}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return of(LEAST_POLLUTION_STATION_MEASUREMENTS_MOCK);
    // TODO uncomment after backend changes
    // return this.httpClient.get<ApiResponse<PollutionStationMeasurementsDto>>(path, {params})
    //   .pipe(map(response => response.data));
  }

  public getMiddlePolluted(): Observable<PollutionStationMeasurementsDto> {
    const path = `${this.apiEndpointProvider.getPath('/measurements/middlepolluted')}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return of(MIDDLE_POLLUTION_STATION_MEASUREMENTS_MOCK);
    // TODO uncomment after backend changes
    // return this.httpClient.get<ApiResponse<PollutionStationMeasurementsDto>>(path, {params})
    //   .pipe(map(response => response.data));
  }

  public getStations(): Observable<ApiResponseData<StationDto[]>> {
    const path = this.apiEndpointProvider.getPath('/station');
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<ApiResponseData<StationDto[]>>>(path, {params})
      .pipe(map(response => response.data));
  }

  public getStandMeasurements(id: string): Observable<StandMeasurementDto[]> {
    const path = `${this.apiEndpointProvider.getPath('/stand')}/${id}`;
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<StandMeasurementDto[]>>(path, {params})
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

  public getStationsCords(): Observable<StationCords[]> {
    const path = this.apiEndpointProvider.getPath('/station/getCords');
    const queryParams = new QueryParams();
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<ApiResponse<StationCords[]>>(path, {params})
      .pipe(map(response => response.data));
  }
}