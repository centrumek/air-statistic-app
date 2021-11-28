import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AppService } from '../../app.service';

@Component({
  selector: 'app-back',
  templateUrl: './back.component.html',
  styleUrls: ['./back.component.scss']
})
export class BackComponent {

  constructor(private router: Router,
              private appService: AppService) {
  }

  public back(): void {
    this.router.navigateByUrl(this.appService.getBackUrl());
  }
}
