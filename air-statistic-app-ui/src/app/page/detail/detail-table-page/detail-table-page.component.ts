import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { DetailPageService } from '../detail-page.service';
import { ActivatedRoute } from '@angular/router';
import { takeUntil } from 'rxjs/operators';
import { StandMeasurementDto } from 'src/app/model/api/stand-measurement.dto';

@Component({
  selector: 'app-detail-table-page',
  templateUrl: './detail-table-page.component.html',
  styleUrls: ['./detail-table-page.component.scss']
})
export class DetailTablePageComponent implements OnInit, OnDestroy {

  public standCode: string;
  private stand?: StandMeasurementDto | null;
  private unsubscribe = new EventEmitter<boolean>();

  constructor(private detailPageService: DetailPageService,
              private route: ActivatedRoute,) {
          this.standCode = this.route.snapshot.params['standCode'];
  }

  public ngOnInit(): void {
    this.detailPageService.getStandMeasurements(this.standCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {
        this.stand = data;
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
