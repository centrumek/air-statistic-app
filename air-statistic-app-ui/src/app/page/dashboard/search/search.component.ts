import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { Form } from '../../../config/form/form.model';
import { Validators } from '@angular/forms';
import { ApiService } from '../../../service/api.service';
import { StationSearchService } from '../../../service/station-search.service';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.scss']
})
export class SearchComponent extends Form implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();

  public processing = false;
  public voivodeships: string[] = [];

  constructor(private apiService: ApiService,
              private stationSearchService: StationSearchService) {
    super({
      elements: {
        stationNumber: {
          value: '',
        },
        stationName: {
          value: '',
        },
        stationCode: {
          value: '',
        },
        stationType: {
          value: '',
        },
        internationalCode: {
          value: '',
        },
        voivodeship: {
          value: '',
          validators: [Validators.required],
        },
        address: {
          value: ''
        },
        location: {
          value: ''
        },
        locationType: {
          value: ''
        },
        indicator: {
          value: ''
        },
        measurementType: {
          value: ''
        },
        measurementStartDate: {
          value: ''
        },
        measurementEndDate: {
          value: ''
        },
      },
      validationMessages: {
        'stationName': [
          {type: 'required', message: 'Station name is required'},
        ],
        'stationCode': [
          {type: 'required', message: 'Station code is required'}
        ]
      }
    })
  }

  public ngOnInit(): void {
    this.apiService.getVoivodeships()
      .pipe()
      .subscribe(response => this.voivodeships = response);
  }

  public submit(): void {
    super.submit();
    if (this.form.valid) {
      this.processing = true;

      this.stationSearchService.searchStations(StationSearchService.prepareSearchRequest(this.form.value))
        .subscribe(response => {
          this.stationSearchService.setSearchedStations(response);
          this.processing = false;
        }, () => {
          this.processing = false;
        })
    }
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
