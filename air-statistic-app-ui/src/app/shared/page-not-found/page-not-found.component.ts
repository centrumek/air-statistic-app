import { Component, EventEmitter, OnDestroy } from '@angular/core';
import { Router } from '@angular/router';
import { StorageService } from '../../service/storage.service';

@Component({
  selector: 'app-page-not-found',
  templateUrl: './page-not-found.component.html',
  styleUrls: ['./page-not-found.component.scss']
})
export class PageNotFoundComponent implements OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();
  public previousUrl: string | null;

  constructor(private router: Router,
              private storageService: StorageService) {
    this.previousUrl = storageService.getPreviousUrl();
  }

  public goBack(): void {
    this.router.navigate([this.previousUrl]);
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
