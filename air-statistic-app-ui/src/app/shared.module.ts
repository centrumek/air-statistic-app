import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { TailwindTestComponent } from './tailwind-test/tailwind-test.component';
import { ChartTestComponent } from './chart-test/chart-test.component';
import { AboutUsComponent } from './page/about-us/about-us.component';
import { NgApexchartsModule } from 'ng-apexcharts';

@NgModule({
  declarations: [
    TailwindTestComponent,
    ChartTestComponent,
    AboutUsComponent,
  ],
  imports: [
    BrowserModule,
    NgApexchartsModule
  ],
  exports: [
    TailwindTestComponent,
    ChartTestComponent,
    AboutUsComponent,
  ]
})
export class SharedModule {
}
