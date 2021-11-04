import { FormElementOption } from './form-element.option';

export interface FormElementOptions {
  elements: { [key: string]: FormElementOption };
  validationMessages: { [key: string]: { type: string, message: string }[] };
}
