import { ValidatorFn } from '@angular/forms';

export interface FormElementOption {
  value?: any;
  validators?: ValidatorFn[];
}
