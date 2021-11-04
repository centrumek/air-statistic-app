import { AbstractControl, FormControl, FormGroup, ValidatorFn } from '@angular/forms';
import { FormElementOptions } from './form-element.options';
import { ReactiveFormConfig } from './reactive-form.config';
import { Directive, EventEmitter, Output } from '@angular/core';
import { ObjectUtils } from '../../utils/object.utils';

@Directive()
export abstract class Form {

  @Output() submitted = new EventEmitter<any>();
  @Output() processingEmitter = new EventEmitter<boolean>();

  private readonly validationMessages: { [key: string]: { type: string, message: string }[] };
  private controlKeys: string[] = [];
  public readonly form: FormGroup;
  public errors: { [key: string]: any[] } = {};

  protected constructor(protected options: FormElementOptions, protected formValidator?: ValidatorFn) {
    const {controlKeys, abstractControls} = this.prepareReactiveFormConfig(options);
    this.controlKeys = controlKeys;
    this.form = new FormGroup(abstractControls, formValidator);
    this.validationMessages = options.validationMessages;
    this.resetErrors();
  }

  public onFormChange(name: string): void {
    this.errors[name] = this.getErrors(name);
  }

  public getErrors(key: any): string[] {
    const errors: string[] = [];
    if (this.form.controls.hasOwnProperty(key)) {
      const control: FormControl = this.form.controls[key] as FormControl;
      if (this.validationMessages !== undefined) {
        const validation = this.validationMessages[key];
        if (ObjectUtils.nonNullOrEmpty(validation)) {
          for (const validationName of validation) {
            if (ObjectUtils.nonNullOrEmpty(validationName) && control.hasError(validationName.type)) {
              errors.push(validationName.message);
            }
          }
        }
        if (this.isTouched(control)) {
          return errors;
        }
      }
      return [];
    }
    return [];
  }

  private prepareReactiveFormConfig(options: FormElementOptions): ReactiveFormConfig {
    const controlKeys: string [] = [];
    const abstractControls: { [key: string]: AbstractControl } = {};
    const elements = options.elements;

    Object.keys(elements).forEach(key => {
      controlKeys.push(key);
      abstractControls[key] = new FormControl(elements[key]?.value, elements[key]?.validators);
    });
    return {controlKeys, abstractControls};
  }

  public submit(): void {
    Object.keys(this.form.controls).forEach(key => {
      this.form.get(key)?.markAsDirty();
      this.errors[key] = this.getErrors(key);
    });
  }

  protected resetErrors(): void {
    this.controlKeys.forEach(key => this.errors[key] = []);
  }

  public isTouched(field: any): boolean {
    return field.dirty || field.touched;
  }
}
