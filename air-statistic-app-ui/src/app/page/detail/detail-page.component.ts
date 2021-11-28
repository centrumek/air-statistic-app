import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-detail-page',
  templateUrl: './detail-page.component.html',
  styleUrls: ['./detail-page.component.scss']
})
export class DetailPageComponent implements OnInit {

  constructor(private router: Router,
              private route: ActivatedRoute) {
  }

  public ngOnInit(): void {
  }

  public navigateToDiagramDetailPage(): void {
    this.router.navigate(['diagram'], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(): void {
    this.router.navigate(['table'], {relativeTo: this.route});
  }
}
