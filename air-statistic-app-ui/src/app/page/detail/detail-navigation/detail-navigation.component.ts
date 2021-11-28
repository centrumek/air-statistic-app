import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-detail-navigation',
  templateUrl: './detail-navigation.component.html',
  styleUrls: ['./detail-navigation.component.scss']
})
export class DetailNavigationComponent implements OnInit {

  constructor(private router: Router,
              private route: ActivatedRoute) {
  }

  ngOnInit(): void {
  }

  public navigateToDiagramDetailPage(): void {
    this.router.navigate(['../diagram'], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(): void {
    this.router.navigate(['../table'], {relativeTo: this.route});
  }
}
