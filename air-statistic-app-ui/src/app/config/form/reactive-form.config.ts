import { AbstractControl } from '@angular/forms';

export interface ReactiveFormConfig {
  controlKeys: string[];
  abstractControls: { [key: string]: AbstractControl };
}
