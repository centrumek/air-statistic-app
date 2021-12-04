import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DetailPageService } from './detail-page.service';
import { StationMeasurementDto } from '../../model/api/station-measurement.dto';

@Component({
  selector: 'app-detail-page',
  templateUrl: './detail-page.component.html',
  styleUrls: ['./detail-page.component.scss']
})
export class DetailPageComponent implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();
  private stationCode: string;
  private measurements: StationMeasurementDto[] = [];

  constructor(private router: Router,
              private route: ActivatedRoute,
              private detailPageService: DetailPageService) {
    this.stationCode = this.route.snapshot.params['stationCode'];
  }

  public ngOnInit(): void {
    this.detailPageService.getMeasurements(this.stationCode)
      .subscribe(data => {
        this.measurements = data;
        console.log(data)
      });
  }

  public navigateToDiagramDetailPage(): void {
    this.router.navigate(['diagram'], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(): void {
    this.router.navigate(['table'], {relativeTo: this.route});
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
