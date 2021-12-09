import { Component, OnInit, EventEmitter, OnDestroy } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { DetailPageService } from '../detail-page.service';
import { takeUntil } from 'rxjs/operators';
import { StandMeasurementDto } from 'src/app/model/api/stand-measurement.dto';

@Component({
  selector: 'app-detail-diagram-page',
  templateUrl: './detail-diagram-page.component.html',
  styleUrls: ['./detail-diagram-page.component.scss']
})
export class DetailDiagramPageComponent implements OnInit, OnDestroy {

  public standCode: string;
  private stand?: StandMeasurementDto | null;
  private unsubscribe = new EventEmitter<boolean>();

  constructor(private route: ActivatedRoute, private detailPageService: DetailPageService) {
    this.standCode = this.route.snapshot.params['standCode'];
  }

  ngOnInit(): void {
    this.detailPageService.getStandMeasurements(this.standCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {
        this.stand = data;
        console.log(this.stand);
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
    this.detailPageService.resetStandMeasurements();
  }

}
