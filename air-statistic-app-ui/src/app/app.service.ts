import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { Observable } from 'rxjs/internal/Observable';

@Injectable({
  providedIn: 'root'
})
export class AppService {
  private backUrl = '';
  private selectedVoivodeship = new BehaviorSubject<any>(null);

  constructor(private router: Router) {
  }

  public setBackUrl(backUrl: string): void {
    this.backUrl = this.prepareBackUrl(backUrl);
  }

  public getBackUrl(): string {
    return this.backUrl;
  }

  private prepareBackUrl(backUrl: string): string {
    let newUrl = '';
    if (backUrl?.includes('/..')) {
      const stepsNumber = backUrl.split('/').length - 1;
      const urlTree = this.router.routerState.snapshot.url.split('/');
      newUrl = urlTree.filter((value, index, array) => index < (array.length - stepsNumber))
        .join('/');
    } else {
      newUrl = backUrl;
    }
    return newUrl;
  }

  public setFormValues(value: string): void {
    return this.selectedVoivodeship.next(value);
  }

  public getFormValues(): Observable<any> {
    return this.selectedVoivodeship.asObservable();
  }
}
