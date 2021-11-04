import { HttpParameterCodec } from '@angular/common/http';

export class HttpParamEncoder implements HttpParameterCodec {
  public decodeKey(key: string): string {
    return decodeURIComponent(key);
  }

  public decodeValue(value: string): string {
    return value;
  }

  public encodeKey(key: string): string {
    return key;
  }

  public encodeValue(value: string): string {
    return encodeURIComponent(value);
  }
}
