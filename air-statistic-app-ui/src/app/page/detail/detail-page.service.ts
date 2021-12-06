import { Injectable } from '@angular/core';
import { ApiService } from '../../service/api.service';
import { StationMeasurementDto } from '../../model/api/station-measurement.dto';
import { Observable } from 'rxjs/internal/Observable';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { tap } from 'rxjs/operators';
import { ObjectUtils } from '../../utils/object.utils';
import { StandMeasurementDto } from 'src/app/model/api/stand-measurement.dto';

@Injectable()
export class DetailPageService {


  private measurements = new BehaviorSubject<StationMeasurementDto[]>([]);
  private standMeasurements = new BehaviorSubject<StandMeasurementDto | null>(null);

  constructor(private apiService: ApiService) {}

  public getMeasurements(stationCode: string): Observable<StationMeasurementDto[]> {
    if (ObjectUtils.tableNotNullAndNotEmpty(this.measurements.getValue())) {
      return this.measurements.asObservable();
    }

    return this.apiService.getStationDetailMeasurements(stationCode)
      .pipe(tap(response => this.measurements.next(response)));
  }

  public getStandMeasurements(standCode: string): Observable<StandMeasurementDto | null> {
    if (ObjectUtils.nonNullOrEmpty(this.standMeasurements.getValue())) {
      return this.standMeasurements.asObservable();
    }

    return this.apiService.getStandMeasurements(standCode)
      .pipe(tap(response => this.standMeasurements.next(response)));
  }

}
