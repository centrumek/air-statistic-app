import { Component } from '@angular/core';
import { Form } from '../../../config/form/form.model';
import { Validators } from '@angular/forms';
import { ApiService } from '../../../service/api.service';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.scss']
})
export class SearchComponent extends Form {

  public processing = false;

  constructor(private apiService: ApiService) {
    super({
      elements: {
        stationNumber: {
          value: '4127',
        },
        stationName: {
          value: 'Kraków Południe',
          validators: [Validators.required],
        },
        stationCode: {
          value: 'KR102',
          validators: [Validators.required],
        },
        stationType: {
          value: 'Lucky',
        },
        internationalCode: {
          value: 'PL-KR-102',
        },
        voivodeship: {
          value: 'Małopolskie'
        },
        address: {
          value: 'Polna 12'
        },
        location: {
          value: 'Kraków'
        },
        locationType: {
          value: 'A19'
        },
        indicator: {
          value: 'Benzen'
        },
        measurementType: {
          value: 'Automatyczny'
        },
        measurementStartDate: {
          value: '2021-02-02'
        },
        measurementEndDate: {
          value: '2021-02-03'
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

  public submit(): void {
    super.submit();
    if (this.form.valid) {
      this.processing = true;
      setTimeout(() => {
        console.log(this.form.value);
        this.apiService.search(this.form.value)
          .subscribe(response => {
            // TODO search result action
            this.processing = false;
          }, () => {
            this.processing = false;
          })
      }, 1000)
    }
  }

}
