import { Component, Input, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-detail-navigation',
  templateUrl: './detail-navigation.component.html',
  styleUrls: ['./detail-navigation.component.scss']
})
export class DetailNavigationComponent implements OnInit {

  @Input() standCode: string | "";

  constructor(private router: Router,
              private route: ActivatedRoute) {
                this.standCode = this.route.snapshot.params['standCode'];
  }

  ngOnInit(): void {
  }

  public navigateToDiagramDetailPage(parametr: string): void {
    this.router.navigate(['../../diagram', parametr], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(parametr: string): void {
    this.router.navigate(['../../table', parametr], {relativeTo: this.route});
  }
}
