import { ObjectUtils } from '../utils/object.utils';
import { Router } from '@angular/router';
import { Injectable } from '@angular/core';

const PREVIOUS_URL = 'previousUrl';
const DASHBOARD_URL = '/dashboard';

@Injectable({
  providedIn: 'root'
})
export class StorageService {

  constructor(
    private router: Router) {
  }

  public setPreviousUrl(url: string): void {
    sessionStorage.setItem(PREVIOUS_URL, url);
  }

  public getPreviousUrl(): string | null {
    return ObjectUtils.isDefined(sessionStorage.getItem(PREVIOUS_URL)) && sessionStorage.getItem(PREVIOUS_URL) !== this.router.url ? sessionStorage.getItem(PREVIOUS_URL) : DASHBOARD_URL
  }
}
