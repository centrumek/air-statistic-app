import { Injectable } from '@angular/core';
import { ApiService } from '../../service/api.service';
import { StationMeasurementDto } from '../../model/api/station-measurement.dto';
import { Observable } from 'rxjs/internal/Observable';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { tap } from 'rxjs/operators';
import { ObjectUtils } from '../../utils/object.utils';

@Injectable()
export class DetailPageService {

  private measurements = new BehaviorSubject<StationMeasurementDto[]>([]);

  constructor(private apiService: ApiService) {

  }

  public getMeasurements(stationCode: string): Observable<StationMeasurementDto[]> {
    if (ObjectUtils.tableNotNullAndNotEmpty(this.measurements.getValue())) {
      return this.measurements.asObservable();
    }

    return this.apiService.getStationMeasurements(stationCode)
      .pipe(tap(response => this.measurements.next(response)));
  }

}
