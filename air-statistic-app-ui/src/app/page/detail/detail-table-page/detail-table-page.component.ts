import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { DetailPageService } from '../detail-page.service';
import { ActivatedRoute } from '@angular/router';
import { StationMeasurementDto } from '../../../model/api/station-measurement.dto';

@Component({
  selector: 'app-detail-table-page',
  templateUrl: './detail-table-page.component.html',
  styleUrls: ['./detail-table-page.component.scss']
})
export class DetailTablePageComponent implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();
  private stationCode: string;
  private measurements: StationMeasurementDto[] = [];

  constructor(private detailPageService: DetailPageService,
              private route: ActivatedRoute,) {
    this.stationCode = this.route.snapshot.params['stationCode'];
  }

  public ngOnInit(): void {
    this.detailPageService.getMeasurements(this.stationCode)
      .subscribe(data => {
        this.measurements = data;
        console.log(data)
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
