import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { DetailPageService } from '../detail-page.service';
import { ActivatedRoute } from '@angular/router';
import { takeUntil } from 'rxjs/operators';
import { StandMeasurement } from 'src/app/model/stand-measurements';

@Component({
  selector: 'app-detail-table-page',
  templateUrl: './detail-table-page.component.html',
  styleUrls: ['./detail-table-page.component.scss']
})
export class DetailTablePageComponent implements OnInit, OnDestroy {

  public standCode: string;
  public standMeasurementArray?: StandMeasurement[] | null;
  public stand?: StandMeasurement | null;
  private unsubscribe = new EventEmitter<boolean>();

  constructor(private detailPageService: DetailPageService,
              private route: ActivatedRoute,) {
          this.standCode = this.route.snapshot.params['standCode'];
  }

  public ngOnInit(): void {
    this.detailPageService.getStandMeasurements(this.standCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {
        this.standMeasurementArray = data.map(chart => {
          return {
            stand_code: chart.stand_code,
            indicator_code: chart.indicator_code,
            indicator: chart.indicator,
            measurement_values: chart.measurement_values.split(',').map(Number),
            measurement_dates: chart.measurement_dates.split(','),
          }
        });
        this.stand = this.standMeasurementArray[0];
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
