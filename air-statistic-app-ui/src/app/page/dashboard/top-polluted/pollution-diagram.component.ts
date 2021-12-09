import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { ApiService } from '../../../service/api.service';
import { takeUntil } from 'rxjs/operators';
import { PollutionStationMeasurementsDto } from '../../../model/api/station-measurements.dto';


@Component({
  selector: 'app-pollution-diagram',
  templateUrl: './pollution-diagram.component.html',
  styleUrls: ['./pollution-diagram.component.scss']
})
export class PollutionDiagramComponent implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter();
  public topPollutedStationMeasurements?: PollutionStationMeasurementsDto;
  public middlePollutedStationMeasurements?: PollutionStationMeasurementsDto;
  public leastPollutedStationMeasurements?: PollutionStationMeasurementsDto;

  constructor(private apiService: ApiService) {
  }

  public ngOnInit(): void {
    this.apiService.getTopPolluted()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => this.topPollutedStationMeasurements = data);

    this.apiService.getMiddlePolluted()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => this.middlePollutedStationMeasurements = data);

    this.apiService.getLeastPolluted()
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => this.leastPollutedStationMeasurements = data);
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
