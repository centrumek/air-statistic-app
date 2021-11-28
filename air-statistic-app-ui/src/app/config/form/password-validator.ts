import { AbstractControl } from '@angular/forms';

export class PasswordValidator {
  static areEqual(AC: AbstractControl): any {
    const password = AC.get('password')?.value;
    const confirmPassword = AC.get('repeatPassword')?.value;
    if (password !== confirmPassword) {
      AC.get('repeatPassword')?.setErrors({areEqual: true});
    } else {
      return null;
    }
  }
}
