import { HttpParams } from '@angular/common/http';
import { HttpParamEncoder } from './http-param-encoder';
import { Pagination } from '../model/pagination';

export class QueryParams {
  private _params: HttpParams;

  constructor() {
    this._params = new HttpParams({encoder: new HttpParamEncoder});
  }

  public add(key: string, value: string): this {
    if (key && value) {
      this._params = this._params.append(key, value);
    }
    return this;
  }

  public addBoolean(key: string, value: boolean): void {
    if (key && value) {
      this._params = this._params.append(key, value.toString());
    }
  }

  public addPagination(pagination: Pagination): void {
    if (pagination) {
      this._params = this._params.append('page', pagination.page.toString());
      this._params = this._params.append('limit', pagination.limit.toString());
    }
  }

  public addHttpParams(params: HttpParams): void {
    params.keys().forEach(key => this._params = this._params.append(key, params.get(key)!));
  }

  public addAll(params: any): void {
    if (params) {
      Object.keys(params).forEach(key => this._params = this._params.append(key, params[key]));
    }
  }

  get params(): HttpParams {
    return this._params;
  }
}
