import { Injectable } from '@angular/core';
import {
  HttpErrorResponse,
  HttpEvent,
  HttpHandler,
  HttpInterceptor,
  HttpRequest,
  HttpResponse
} from '@angular/common/http';
import { Observable } from 'rxjs/internal/Observable';
import { environment } from '../../environments/environment';
import { delay } from 'rxjs/operators';
import { of } from 'rxjs/internal/observable/of';
import { UrlHelper } from '../utils/url.helper';

const EXAMPLE_ERROR_RESPONSE = {
  error: 'error',
  headers: undefined,
  status: 500,
  statusText: 'Error',
  url: undefined,
};

const API_EXAMPLE = '/airfree/api/test/?/ids';
const API_SEARCH = '/airfree/api/search';

@Injectable()
export class BackendInterceptor implements HttpInterceptor {


  private tempEndpoints: MockEndpointI[] = [
    {
      path: '',
      response: new HttpResponse({status: 200, body: ''})
    }
  ];


  private allEndpointMocks: MockEndpointI[] = [
    {
      path: API_EXAMPLE,
      response: new HttpResponse({status: 200, body: ''})
    }, {
      path: API_SEARCH,
      response: new HttpResponse({
        status: 200, body: {
          status: 'xyz'
        }
      }),
      delay: 300
    }, {
      path: '',
      errorResponse: new HttpErrorResponse(EXAMPLE_ERROR_RESPONSE),
    },

  ]

  constructor() {
  }

  public intercept(req: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {

    if (environment.mockedRestApi) {

      const mockResponse = this.mockResponse(req, next, this.allEndpointMocks);

      if (mockResponse instanceof HttpErrorResponse) {
        throw mockResponse;
      } else {
        return mockResponse;
      }
    }

    const response = this.mockResponse(req, next, this.tempEndpoints);

    if (response instanceof HttpErrorResponse) {
      throw response;
    } else {
      return response;
    }

    return next.handle(req).pipe(delay(200));
  }

  private mockResponse(req: HttpRequest<any>, next: HttpHandler, mockedEndpoints: MockEndpointI[]): any {
    const url = UrlHelper.url(req.url);

    const matchedEndpoints = mockedEndpoints
      .map(mock => new MockedEndpoint(mock))
      .filter(mock => mock.match(url.pathname));

    if (matchedEndpoints.length === 1) {
      if (matchedEndpoints[0].response) {
        return matchedEndpoints[0].getResponse();
      } else {
        return matchedEndpoints[0].getErrorResponse();
      }
    } else if (matchedEndpoints.length > 1) {
      console.error('More than one matching mocked endpoint', matchedEndpoints);
    }

    return next.handle(req);
  }

}

interface MockEndpointI {
  path: string;
  response?: HttpResponse<any>;
  errorResponse?: HttpErrorResponse;
  delay?: number;
}

class MockedEndpoint<T> {
  private pattern: string;
  path: string;
  response?: HttpResponse<T>;
  errorResponse?: HttpErrorResponse;
  delay: number | undefined = 100;

  constructor(mock: MockEndpointI) {
    this.path = mock.path;
    this.response = mock?.response;
    this.errorResponse = mock?.errorResponse;

    if (Boolean(mock.delay)) {
      this.delay = mock.delay;
    }

    this.pattern = this.preparePath(mock.path);
  }

  private preparePath(path: string) {
    let pattern = path.split('?').join('.*');
    pattern = pattern.split('/').join('\/');
    return `(^|,)${pattern}(,|$)`;
  }

  public match(path: string): boolean {
    return new RegExp(this.pattern).test(path);
  }

  public getResponse(): Observable<HttpResponse<T> | undefined> {
    const response = of(this.response);

    if (this.delay) {
      return response.pipe(delay(this.delay));
    }
    return response;
  }

  public getErrorResponse(): HttpErrorResponse | undefined {
    return this.errorResponse;
  }
}
