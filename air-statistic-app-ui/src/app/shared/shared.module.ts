import { ModuleWithProviders, NgModule } from '@angular/core';
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
import { MAPBOX_API_KEY, NgxMapboxGLModule } from 'ngx-mapbox-gl';
import { MapService } from '../map/map.service';
import { MapModalComponent } from '../map-modal/map-modal.component';
import { NoDataComponent } from './no-data/no-data.component';


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
    NoDataComponent,
  ],
  imports: [
    NgApexchartsModule,
    CommonModule,
    NgxMapboxGLModule,
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
    NoDataComponent,
  ],
  providers: [MapService]
})
export class SharedModule {
  static forRoot(
    config: IMyLibMapModuleConfig
  ): ModuleWithProviders<SharedModule> {
    return {
      ngModule: SharedModule,
      providers: [
        {
          provide: MAPBOX_API_KEY,
          useValue: config.mapboxToken,
        },
      ],
    };
  }
}

export interface IMyLibMapModuleConfig {
  mapboxToken: string;
}
