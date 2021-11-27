import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {

  constructor(private router: Router) {
  }

  public ngOnInit(): void {
  }

  public navigateToDetailPage(): void {
    this.router.navigateByUrl('/dashboard/detail/station/123')
  }

}