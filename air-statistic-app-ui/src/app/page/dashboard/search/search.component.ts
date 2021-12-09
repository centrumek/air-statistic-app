import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { Form } from '../../../config/form/form.model';
import { Validators } from '@angular/forms';
import { ApiService } from '../../../service/api.service';
import { StationSearchService } from '../../../service/station-search.service';
import { AppService } from '../../../app.service';
import { take, takeUntil } from 'rxjs/operators';
import { ObjectUtils } from '../../../utils/object.utils';

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
              private stationSearchService: StationSearchService,
              private appService: AppService) {
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
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(response => {
        this.voivodeships = response;
        this.appService.getFormValues()
          .pipe(take(1))
          .subscribe(value => {
            if (ObjectUtils.isDefined(value)) {
              this.form.setValue(value);
              this.submit();
            }
          });
      });
  }

  public onFormChange(name: string): void {
    super.onFormChange(name);
    this.appService.setFormValues(this.form.value);
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
