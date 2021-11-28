import * as lodash from 'lodash'

export class ObjectUtils {

  static nonNullOrEmpty(object: any): boolean {
    return !!object;
  }

  static tableNotNullAndNotEmpty(table: any[]) {
    return table && table.length > 0;
  }

  static isDefined(value: any): boolean {
    return value !== undefined && value !== null;
  }

  static cloneDeep(object: any): any {
    return lodash.cloneDeep(object);
  }
}
