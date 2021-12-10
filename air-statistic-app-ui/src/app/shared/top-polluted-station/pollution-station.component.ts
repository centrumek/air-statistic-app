import { Component, Input } from '@angular/core';
import { PollutionStationMeasurementsDto } from '../../model/api/station-measurements.dto';
import { ActivatedRoute, Router } from '@angular/router';


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

  constructor(private router: Router,
              private route: ActivatedRoute) {
  }

  @Input('stationMeasurements') set setStation(stationMeasurements: PollutionStationMeasurementsDto) {
    console.log(stationMeasurements);
    this.stationMeasurements = stationMeasurements;
    this.location = stationMeasurements.station[0].location;
    this.address = stationMeasurements.station[0].adress;
    this.values = stationMeasurements.values
      .filter(value => value > 0)
      .slice(0, 8)
      .map(value => Math.round(value * 100) / 100);

    console.log(this.values);

    this.value = Math.max.apply(Math, this.values);
  }

  public navigateToDetails(): void {
    this.router.navigate([`detail/station/${this.stationMeasurements?.station[0].station_code}/diagram/${this.stationMeasurements?.station[0].stand_code}`],
      {relativeTo: this.route});
  }
}
