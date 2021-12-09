import { AfterViewInit, Component } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements AfterViewInit {
  constructor(private activatedRoute: ActivatedRoute,
              private router: Router) {
  }

  public ngAfterViewInit(): void {
    if (this.router.url.includes('#search')) {
      setTimeout(() => {
        document.getElementById('search')?.scrollIntoView();
      }, 100);
    }
  }
}
