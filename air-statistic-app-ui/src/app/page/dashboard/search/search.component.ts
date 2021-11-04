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
        station: {
          value: 'station_name',
          validators: [Validators.required],
        },
        status: {
          value: 'status_value',
          validators: [Validators.required],
        }
      },
      validationMessages: {
        'station': [
          {type: 'required', message: 'Station is required'},
        ],
        'status': [
          {type: 'required', message: 'Status is required'}
        ]
      }
    })
  }

  public submit(): void {
    super.submit();
    if (this.form.valid) {
      this.processing = true;
      setTimeout(() => {
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
