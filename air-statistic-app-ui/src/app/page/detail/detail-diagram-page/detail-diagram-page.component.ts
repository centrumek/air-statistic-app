import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { DetailPageService } from '../detail-page.service';
import { takeUntil } from 'rxjs/operators';
import { StandMeasurement } from 'src/app/model/stand-measurements';

const DATA_NUMBER = 200;

@Component({
  selector: 'app-detail-diagram-page',
  templateUrl: './detail-diagram-page.component.html',
  styleUrls: ['./detail-diagram-page.component.scss']
})
export class DetailDiagramPageComponent implements OnInit, OnDestroy {

  public standCode: string;
  public standMeasurementArray?: StandMeasurement[] | null;
  public stand?: StandMeasurement;
  private unsubscribe = new EventEmitter<boolean>();

  constructor(private route: ActivatedRoute, private detailPageService: DetailPageService) {
    this.standCode = this.route.snapshot.params['standCode'];
  }

  ngOnInit(): void {
    this.detailPageService.getStandMeasurements(this.standCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {


        this.standMeasurementArray = data.map(chart => {

          const measurementValuesTab = chart.measurement_values.split(',');
          const measurementDatesTab = chart.measurement_dates.split(',');

          return {
            stand_code: chart.stand_code,
            indicator_code: chart.indicator_code,
            indicator: chart.indicator,
            measurement_values: measurementValuesTab
              .slice(measurementValuesTab.length - DATA_NUMBER, measurementValuesTab.length)
              .map(Number),
            measurement_dates: measurementDatesTab
              .slice(measurementDatesTab.length - DATA_NUMBER, measurementDatesTab.length)
          }
        });
        this.stand = this.standMeasurementArray[0];
        console.log(this.stand);
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
    this.detailPageService.resetStandMeasurements();
  }

}
