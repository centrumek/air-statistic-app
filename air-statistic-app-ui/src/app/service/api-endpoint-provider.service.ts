import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ApiEndpointProviderService {
  private _apiEndpoint: string | undefined;

  public getApiEndpoint(): string {
    if (this._apiEndpoint == null) {
      const protocol = environment.apiProtocol !== 'auto' ? environment.apiProtocol : location.protocol;
      const host = environment.apiHost !== 'auto' ? environment.apiHost : location.hostname;
      const port = environment.apiPort !== 'auto' ? environment.apiPort : location.port;
      this._apiEndpoint = `${protocol}//${host}:${port}/${environment.apiPath}`;
    }
    return this._apiEndpoint;
  }

  public getPath(endpoint: string) {
    return this.getApiEndpoint() + endpoint;
  }
}
