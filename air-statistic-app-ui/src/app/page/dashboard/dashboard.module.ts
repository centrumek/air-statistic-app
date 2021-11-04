import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from '../../app-routing.module';
import { NgApexchartsModule } from 'ng-apexcharts';
import { DashboardComponent } from './dashboard.component';
import { SharedModule } from '../../shared.module';


@NgModule({
  declarations: [
    DashboardComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgApexchartsModule,
    SharedModule
  ],
  exports: [DashboardComponent]
})
export class DashboardModule {
}
