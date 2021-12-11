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
  public type = '';

  constructor(private router: Router,
              private route: ActivatedRoute) {
  }

  @Input('data') set setData(data: { stationMeasurements: PollutionStationMeasurementsDto, type: 'top' | 'middle' | 'least' }) {
    this.type = data.type;
    this.stationMeasurements = data.stationMeasurements;
    this.location = data.stationMeasurements.station[0].location;
    this.address = data.stationMeasurements.station[0].adress;


    switch (data.type) {
      case 'top': {
        this.values = data.stationMeasurements.values
          .filter(value => value > 0)
          .slice(0, 8)
          .map(value => Math.round(value * 100) / 100);
        this.value = Math.max.apply(Math, this.values);
        break;
      }
      case 'least': {
        this.values = data.stationMeasurements.values
          .filter(value => value > 0)
          .slice(0, 8)
          .map(value => Math.round(value * 100) / 100);
        this.value = Math.min.apply(Math, this.values);
        break;
      }
      case 'middle': {

        this.values = data.stationMeasurements.values
          .filter(value => value > 0)
          .slice(data.stationMeasurements.values.length / 2 - 4, data.stationMeasurements.values.length / 2 + 4)
          .map(value => Math.round(value * 100) / 100);

        this.value = this.values[3];
        break;
      }
    }
  }

  public navigateToDetails(): void {
    this.router.navigate([`detail/station/${this.stationMeasurements?.station[0].station_code}/diagram/${this.stationMeasurements?.station[0].stand_code}`],
      {relativeTo: this.route});
  }
}
