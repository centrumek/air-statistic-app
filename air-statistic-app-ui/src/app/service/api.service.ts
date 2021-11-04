import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { QueryParams } from '../utils/query-params';
import { Observable } from 'rxjs/internal/Observable';
import { ApiEndpointProviderService } from './api-endpoint-provider.service';

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
    queryParams.addAll(value);
    const params: HttpParams = queryParams.params;

    return this.httpClient.get<SearchResponse>(path, {params});
  }
}

interface SearchRequest {
  station: string;
  status: string;
}

interface SearchResponse {
  status: string;
}
