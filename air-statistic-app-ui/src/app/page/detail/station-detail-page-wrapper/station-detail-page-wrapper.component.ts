import { Component, OnInit } from '@angular/core';
import { StationDto } from '../../../model/api/station.dto';
import { ActivatedRoute } from '@angular/router';
import { ApiService } from '../../../service/api.service';

@Component({
  selector: 'app-station-detail-page-wrapper',
  templateUrl: './station-detail-page-wrapper.component.html',
  styleUrls: ['./station-detail-page-wrapper.component.scss']
})
export class StationDetailPageWrapperComponent implements OnInit {

  public showModal = false;
  public station?: StationDto;
  private readonly stationCode: string;

  constructor(private route: ActivatedRoute,
              private apiService: ApiService) {
    this.stationCode = this.route.snapshot.params['stationCode'];
    console.log('WRAPPER: ', this.stationCode);
  }

  public ngOnInit(): void {
    this.apiService.getStation(this.stationCode)
      .subscribe(station => {
        this.station = station[0];
        console.log('WRAPPER: ', this.station);

      });
  }

  public toggleModal() {
    this.showModal = !this.showModal;

    const body = document.getElementsByTagName('body')[0];
    if (this.showModal) {
      body.style.overflow = 'hidden';
    } else {
      body.style.overflow = 'initial';
    }
  }
}
