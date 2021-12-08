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
import { ChartBasicComponent } from '../chart-basic/chart-basic.component';
import { ChartColumnComponent } from '../chart-column/chart-column.component';
import { ChartPieComponent } from '../chart-pie/chart-pie.component';
import { ChartBarComponent } from '../chart-bar/chart-bar.component';
import { InfoModalComponent } from '../info-modal/info-modal.component';
import { PollutionStationComponent } from './top-polluted-station/pollution-station.component';
import { StationChartColumnComponent } from '../station-chart-column/station-chart-column.component';
import { MapComponent } from '../map/map.component';

@NgModule({
  declarations: [
    TailwindTestComponent,
    ChartTestComponent,
    ChartTest2Component,
    AboutUsComponent,
    PageNotFoundComponent,
    BackComponent,
    UserBoxComponent,
    ChartBasicComponent,
    ChartColumnComponent,
    ChartPieComponent,
    ChartBarComponent,
    InfoModalComponent,
    PollutionStationComponent,
    StationChartColumnComponent,
    MapComponent,
  ],
  imports: [
    NgApexchartsModule,
    CommonModule
  ],
  exports: [
    TailwindTestComponent,
    ChartTestComponent,
    ChartTest2Component,
    ChartBasicComponent,
    ChartColumnComponent,
    ChartPieComponent,
    ChartBarComponent,
    AboutUsComponent,
    PageNotFoundComponent,
    InfoModalComponent,
    BackComponent,
    PollutionStationComponent,
    StationChartColumnComponent,
    MapComponent,
  ]
})
export class SharedModule {
}
