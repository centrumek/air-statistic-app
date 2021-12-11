import { Component, EventEmitter } from '@angular/core';
import { StorageService } from '../../service/storage.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-no-data',
  templateUrl: './no-data.component.html',
  styleUrls: ['./no-data.component.scss']
})
export class NoDataComponent {

  private unsubscribe = new EventEmitter<boolean>();
  public previousUrl: string | null;

  constructor(private router: Router,
              private storageService: StorageService) {
    this.previousUrl = storageService.getPreviousUrl();
  }

  public goHome(): void {
    this.router.navigateByUrl('/dashboard');
  }

  public goToContactUs(): void {
    this.router.navigateByUrl('/about-us');
  }

  public goBack(): void {
    this.router.navigate([this.previousUrl]);
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
