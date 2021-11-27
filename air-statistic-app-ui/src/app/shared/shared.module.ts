import { NgModule } from '@angular/core';
import { TailwindTestComponent } from '../tailwind-test/tailwind-test.component';
import { ChartTestComponent } from '../chart-test/chart-test.component';
import { AboutUsComponent } from '../page/about-us/about-us.component';
import { NgApexchartsModule } from 'ng-apexcharts';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { BackComponent } from './back/back.component';
import { ChartTest2Component } from '../chart-test2/chart-test2.component';
import { UserBoxComponent } from './user-box/user-box.component';
import { CommonModule } from '@angular/common';

@NgModule({
  declarations: [
    TailwindTestComponent,
    ChartTestComponent,
    ChartTest2Component,
    AboutUsComponent,
    PageNotFoundComponent,
    BackComponent,
    UserBoxComponent,
  ],
  imports: [
    NgApexchartsModule,
    CommonModule
  ],
  exports: [
    TailwindTestComponent,
    ChartTestComponent,
    ChartTest2Component,
    AboutUsComponent,
    PageNotFoundComponent,
    BackComponent,
  ]
})
export class SharedModule {
}
