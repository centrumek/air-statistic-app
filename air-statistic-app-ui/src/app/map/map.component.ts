import { Component, OnInit, OnDestroy, EventEmitter } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { takeUntil } from 'rxjs/operators';
import { StationCords } from '../model/api/station-cords.dto';
import { MapService } from './map.service';
import { GeoValue } from '../model/geo-values';

@Component({
  selector: 'app-map',
  templateUrl: './map.component.html',
  styleUrls: ['./map.component.scss'],
})
export class MapComponent implements OnInit, OnDestroy {
  map: any;
  private unsubscribe = new EventEmitter<boolean>();
  public stationCords?: StationCords[] | null;
  public geoValues?: GeoValue[] | [];
  public showModal = false;
  public currentStationName = '';
  public currentStationCode = '';

  constructor(private mapPageService: MapService) {}

  public setStation(station_name: string, station_code: string) {
    this.showModal = true;
    this.currentStationName = station_name;
    this.currentStationCode = station_code;
  }

  ngOnInit(): void {
    this.mapPageService
      .getStationCords()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe((data) => {
        this.geoValues = data.map((station) => {
          return {
            type: 'Feature',
            properties: {
              station_code: station.station_code,
              station_name: station.station_name,
            },
            geometry: {
              type: 'Point',
              coordinates: [Number(station.wgs84_e), Number(station.wgs84_n)],
            },
          };
        });
      });
  }

  public toggleModal() {
    this.showModal = !this.showModal;

    const body = document.getElementsByTagName('body')[0];
    if (this.showModal) {
      body.style.overflow = 'hidden';
    } else {
      body.style.overflow = 'initial';
    }
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
    this.mapPageService.resetStationCords();
  }
}
