import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import { StationCords } from '../model/api/station-cords.dto';
import { ApiService } from '../service/api.service';
import { Observable } from 'rxjs/internal/Observable';
import { ObjectUtils } from '../utils/object.utils';
import { tap } from 'rxjs/operators';


@Injectable()
export class MapService {

  private stationCords = new BehaviorSubject<StationCords[]>([]);

  constructor(private apiService: ApiService) { }

  public getStationCords(): Observable<StationCords[]> {
    if (ObjectUtils.tableNotNullAndNotEmpty(this.stationCords.getValue())) {
      return this.stationCords.asObservable();
    }

    return this.apiService.getStationsCords()
      .pipe(tap(response => this.stationCords.next(response)));
  }

  public resetStationCords(): void {
    this.stationCords.next([]);
  }
}
