import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})
export class MenuComponent implements OnInit {

  constructor(private router: Router) {
  }

  public ngOnInit(): void {
  }

  public navigateToSearchForm(): void {
    this.router.navigateByUrl('/dashboard#search');
  }

}
