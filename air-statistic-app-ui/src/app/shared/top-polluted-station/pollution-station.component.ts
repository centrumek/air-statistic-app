import { Component, Input } from '@angular/core';
import { PollutionStationMeasurementsDto } from '../../model/api/station-measurements.dto';


@Component({
  selector: 'app-pollution-station-component',
  templateUrl: './pollution-station.component.html',
  styleUrls: ['./pollution-station.component.scss']
})
export class PollutionStationComponent {

  public stationMeasurements?: PollutionStationMeasurementsDto;
  public location = '';
  public address = '';
  public values: number[] = [];
  public value = 0;

  @Input() type?: 'top' | 'middle' | 'least';

  constructor() {
  }

  @Input('stationMeasurements') set setStation(stationMeasurements: PollutionStationMeasurementsDto) {
    this.stationMeasurements = stationMeasurements;
    this.location = stationMeasurements.location;
    this.address = stationMeasurements.address;
    this.values = stationMeasurements.values;
    this.value = stationMeasurements.value;
  }
}
