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
import { ChartDiagramComponent } from '../chart-diagram/chart-diagram.component';
import { PollutionStationComponent } from './top-polluted-station/pollution-station.component';
import { StationChartColumnComponent } from '../station-chart-column/station-chart-column.component';
import { MapComponent } from '../map/map.component';
import { NgxMapboxGLModule } from 'ngx-mapbox-gl';
import { MapService } from '../map/map.service';
import { MapModalComponent } from '../map-modal/map-modal.component';


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
    ChartDiagramComponent,
    InfoModalComponent,
    PollutionStationComponent,
    StationChartColumnComponent,
    MapComponent,
    MapModalComponent,
  ],
  imports: [
    NgApexchartsModule,
    CommonModule,
    NgxMapboxGLModule.withConfig({
      accessToken: 'pk.eyJ1IjoiamRvbWluaWsiLCJhIjoiY2t3ejg5NDhwMDQ1NTJycWxuN2g1ZmNqZyJ9.KzlUFjYhzCK4fu87AcaEAg', // Optional, can also be set per map (accessToken input of mgl-map)
    })
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
    ChartDiagramComponent,
    PollutionStationComponent,
    StationChartColumnComponent,
    MapComponent,
    MapModalComponent,
  ],
  providers: [MapService]
})
export class SharedModule {
}
