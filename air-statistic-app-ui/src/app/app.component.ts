import { Component, EventEmitter, OnDestroy, OnInit } from '@angular/core';
import { NavigationEnd, Router } from '@angular/router';
import { filter, takeUntil } from 'rxjs/operators';
import { StorageService } from './service/storage.service';
import { AppService } from './app.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit, OnDestroy {

  private unsubscribe = new EventEmitter<boolean>();

  constructor(private router: Router,
              private appService: AppService) {
  }

  ngOnInit() {
    this.router.events
      .pipe(filter((event: any) => event instanceof NavigationEnd))
      .subscribe(() => {
        var root = this.router.routerState.snapshot.root;
        while (root) {
          if (root.children && root.children.length) {
            root = root.children[0];
          } else if (root.data && root.data['backUrl']) {
            const backUrl = root.data['backUrl'];
            this.appService.setBackUrl(backUrl);
            return;
          } else {
            return;
          }
        }
      });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}
