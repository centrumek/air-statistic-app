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
import { UrlHelper } from '../utils/url.helper';
import { of } from 'rxjs/internal/observable/of';
import { ApiResponse } from '../model/api/api-response.interface';
import { PollutionStationMeasurementsDto } from '../model/api/station-measurements.dto';

const TOP_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  'success': true,
  'data': {
    'values': ['434.409', '403.41', '389.921', '358.864', '358.076', '332.133', '330.506', '324.17', '314.09', '304.523', '293.571', '268.889', '268.619', '259.305', '221.869', '210.309', '199.252', '174.481', '169.124', '164.059', '162.456', '162.452', '158.872', '152.752', '150.292', '150.166', '149.157', '148.489', '142.32', '137.205', '133.876', '130.341', '122.423', '117.135', '109.946', '104.521', '100.444', '96.2121', '93.7489', '84.2183', '82.5156', '80.346', '78.727', '72.7155', '62.352', '61.1694', '59.0502', '58.4116', '57.2025', '54.5097', '49.2281', '48.6983', '47.4567', '44.997', '44.4565', '44.2291', '38.8111', '37.5914', '37.3709', '35.9247', '34.6912', '34.158', '34.0794', '33.9332', '33.7625', '32.8238', '31.8146', '31.5523', '30.9876', '30.3786', '30.074', '28.663', '28.4243', '27.5296', '26.9189', '26.7364', '26.0151', '25.7943', '25.5804', '25.2494', '23.6367', '23.6127', '21.9182', '21.0833', '21.0192', '20.5704', '20.4777', '20.4698', '20.29', '20.1473', '20.0082', '19.4684', '18.4436', '18.1603', '18.0744', '17.4611', '17.417', '17.4125', '17.1942', '16.6704', '16.6624', '16.3225', '16.2209', '16.1741', '15.6706', '15.6134', '15.5349', '15.4728', '15.2734', '15.2087', '14.4912', '14.4395', '14.3884', '14.357', '13.04', '12.5606', '12.395', '12.1264', '11.8215', '11.1819', '10.5575', '9.91879', '9.91659', '9.83076', '9.8111', '9.58436', '9.54067', '8.99773', '8.29186', '8.27872', '7.98923', '7.71466', '7.71268', '7.4005', '7.25573', '7.05356', '6.89276', '6.88826', '6.88664', '6.78712', '6.76549', '6.45491', '6.32963', '6.17738', '6.13244', '6.0523', '5.918', '5.22295', '5.12533', '5.06829', '5.04737', '4.98006', '4.97231', '4.96196', '4.89387', '4.81482', '4.65029', '4.51135', '4.00401', '3.82717', '3.61482', '3.54136', '3.39949', '2.62994', '2.215', '2.13263', '2.09631'],
    'station': [{
      'id': 75,
      'stand_code': 'DsNowRudJezi-PM10-1g',
      'station_code': 'DsNowRudJezi',
      'indicator_code': 'PM10',
      'indicator': 'py\u0142 zawieszony PM10',
      'averaging_time': '1-godzinny',
      'measurement_type': 'automatyczny',
      'zone_name': 'strefa dolno\u015bl\u0105ska_2',
      'international_code': 'PL0745A',
      'station_name': 'Nowa Ruda - Jeziorna',
      'old_station_code': 'DsNowRudJezi',
      'start_date': '2019-01-01',
      'close_date': null,
      'station_type': 't\u0142o',
      'location_type': 'miejski',
      'station_kind': 'kontenerowa stacjonarna',
      'voivodeship': 'DOLNO\u015aL\u0104SKIE',
      'location': 'Nowa Ruda',
      'adress': 'ul. Jeziorna 19',
      'wgs84_n': '50.581493',
      'wgs84_e': '16.498245'
    }]
  },
  'message': 'Top polluted stand retrieved successfully.'
};

const LEAST_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  'success': true,
  'data': {
    'values': ['0', '0', '0', '0', '0', '0', '0', '0', '0.20241', '0.2195', '0.38421', '0.41184', '0.52968', '0.73233', '1.13529', '1.48637', '1.62061', '1.74251', '1.86189', '1.90491', '2.01685', '2.17281', '2.38463', '2.54738', '2.5738', '2.68402', '2.73826', '2.81705', '3.24324', '3.44033', '3.61066', '3.76933', '3.79668', '3.87781', '4.15449', '4.34227', '4.48799', '4.5307', '4.59517', '4.77285', '4.93095', '4.96008', '5.15738', '5.16421', '5.2225', '5.27891', '5.3214', '5.85465', '6.25533', '6.38469', '6.38771', '6.49533', '6.76765', '6.78048', '6.79632', '7.0262', '7.05871', '7.13496', '7.16479', '7.29431', '7.38932', '7.43438', '7.74822', '7.80482', '7.85188', '7.89662', '7.94598', '8.07679', '8.09', '8.11369', '8.40224', '8.5518', '8.70912', '8.82628', '9.09183', '9.15687', '9.18604', '9.27683', '9.2877', '9.31784', '9.48435', '9.49347', '9.6495', '9.71648', '9.84441', '9.84934', '9.85951', '9.91339', '9.92458', '9.9477', '9.97184', '10.4747', '10.6976', '10.7489', '10.8527', '11.0724', '11.195', '11.2268', '11.3808', '11.4471', '11.9923', '12.0818', '12.3091', '12.4167', '12.7767', '12.9007', '12.9344', '13.1095', '13.158', '13.2299', '13.4354', '13.5187', '13.9045', '13.9187', '14.0085', '14.0477', '14.2199', '14.2432', '14.7112', '14.7199', '15.0012', '15.4409', '15.5464', '15.8918', '15.9476', '16.2446', '16.3205', '16.4065', '17.5275', '17.8728', '17.8953', '17.9713', '18.0349', '18.2187', '18.3833', '18.5115', '18.803', '18.8507', '19.0309', '19.4995', '19.7618', '19.9968', '20.1822', '20.1962', '20.4885', '20.6128', '20.9383', '21.1896', '21.2334', '21.4799', '21.7368', '23.2268', '23.5151', '23.9265', '24.4063', '25.1993', '26.0378', '27.0162', '27.0924', '27.1305', '27.2652', '27.2938', '29.3125', '29.7877', '32.0697', '33.795', '36.4564', '46.6026'],
    'station': [{
      'id': 14,
      'stand_code': 'DsDzialoszyn-PM10-1g',
      'station_code': 'DsDzialoszyn',
      'indicator_code': 'PM10',
      'indicator': 'py\u0142 zawieszony PM10',
      'averaging_time': '1-godzinny',
      'measurement_type': 'automatyczny',
      'zone_name': 'strefa dolno\u015bl\u0105ska_2',
      'international_code': 'PL0054A',
      'station_name': 'Dzia\u0142oszyn',
      'old_station_code': 'DsDzia01',
      'start_date': '1996-07-01',
      'close_date': null,
      'station_type': 'przemys\u0142owa',
      'location_type': 'pozamiejski',
      'station_kind': 'kontenerowa stacjonarna',
      'voivodeship': 'DOLNO\u015aL\u0104SKIE',
      'location': 'Dzia\u0142oszyn',
      'adress': 'bez ulicy',
      'wgs84_n': '50.972168',
      'wgs84_e': '14.941319'
    }]
  },
  'message': 'Top polluted stand retrieved successfully.'
};

const MIDDLE_POLLUTION_STATION_MEASUREMENTS_MOCK = {
  'success': true,
  'data': {
    'values': ['1', '1', '1', '1', '1', '1.37583', '1.46578', '1.54231', '1.78367', '2.23853', '2.27536', '2.41167', '2.77819', '2.89458', '3.02453', '3.23583', '3.33217', '3.36131', '3.418', '3.55667', '3.96183', '4.18242', '4.29589', '4.33733', '4.40083', '4.57269', '4.69922', '4.73494', '4.74194', '4.80019', '4.89039', '5.057', '5.14206', '5.18783', '5.20253', '5.27525', '5.28833', '5.63181', '5.7', '5.75211', '5.88097', '5.96786', '6.03375', '6.24475', '6.32444', '6.33594', '6.34439', '6.35217', '6.409', '6.76592', '6.96889', '7.28394', '7.28658', '7.33367', '7.49019', '7.54192', '7.60114', '7.89719', '7.92422', '7.96919', '7.98417', '8.27125', '8.34167', '8.45544', '8.55128', '8.76908', '8.78294', '9.0715', '9.11294', '9.25794', '9.39847', '9.55894', '9.56575', '9.71742', '9.76186', '9.89975', '10.0101', '10.0598', '10.1314', '10.1596', '10.2049', '10.5693', '10.686', '10.802', '10.9349', '11.1103', '11.2689', '11.3102', '11.4044', '11.5457', '11.9564', '12.2192', '12.2365', '12.3408', '12.5164', '12.7359', '12.7854', '13.0462', '13.3772', '13.4076', '14.1243', '14.8003', '15.8278', '15.9279', '16.4104', '17.8952', '18.2731', '19.0073', '19.77', '20.3441', '20.3804', '21.2916', '22.389', '22.9058', '23.0757', '23.3988', '23.5829', '23.8369', '23.8698', '24.3461', '25.2376', '25.4137', '25.5805', '26.4192', '26.6243', '26.6378', '26.7145', '26.9368', '28.0494', '28.7142', '29.085', '29.1806', '29.8901', '30.5623', '31.6708', '33.1651', '33.749', '33.9669', '34.444', '35.1953', '35.3161', '35.4114', '35.7958', '37.2084', '37.3494', '38.5921', '39.1098', '39.8154', '40.4506', '42.2316', '43.5662', '44.9526', '46.2453', '47.7971', '48.9894', '49.1147', '49.138', '49.8847', '52.6356', '54.6891', '55.2118', '57.9813', '63.8228', '90.4951'],
    'station': [{
      'id': 780,
      'stand_code': 'PmGdaWyzwo03-PM10-1g',
      'station_code': 'PmGdaWyzwo03',
      'indicator_code': 'PM10',
      'indicator': 'py\u0142 zawieszony PM10',
      'averaging_time': '1-godzinny',
      'measurement_type': 'automatyczny',
      'zone_name': 'Aglomeracja Tr\u00f3jmiejska',
      'international_code': 'PL0047A',
      'station_name': 'AM3 Gda\u0144sk Nowy Port',
      'old_station_code': 'Pm.a03a',
      'start_date': '1998-09-01',
      'close_date': null,
      'station_type': 't\u0142o',
      'location_type': 'miejski',
      'station_kind': 'kontenerowa stacjonarna',
      'voivodeship': 'POMORSKIE',
      'location': 'Gda\u0144sk',
      'adress': 'ul. Wyzwolenia',
      'wgs84_n': '54.400833',
      'wgs84_e': '18.657497'
    }]
  },
  'message': 'Top polluted stand retrieved successfully.'
};

const EXAMPLE_ERROR_RESPONSE = {
  error: 'error',
  headers: undefined,
  status: 500,
  statusText: 'Error',
  url: undefined,
};

const API_SEARCH = '/airfree/api/search';
const API_CHART_TOP_POLLUTED = '/api/measurements/toppolluted';
const API_CHART_MIDDLE_POLLUTED = '/api/measurements/middlepolluted';
const API_CHART_LEAST_POLLUTED = '/api/measurements/leastpolluted';

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
      path: API_CHART_TOP_POLLUTED,
      response: new HttpResponse({status: 200, body: TOP_POLLUTION_STATION_MEASUREMENTS_MOCK}),
      delay: 600
    },
    {
      path: API_CHART_MIDDLE_POLLUTED,
      response: new HttpResponse({status: 200, body: MIDDLE_POLLUTION_STATION_MEASUREMENTS_MOCK}),
      delay: 600
    }, {
      path: API_CHART_LEAST_POLLUTED,
      response: new HttpResponse({status: 200, body: LEAST_POLLUTION_STATION_MEASUREMENTS_MOCK}),
      delay: 600
    },
    {
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
