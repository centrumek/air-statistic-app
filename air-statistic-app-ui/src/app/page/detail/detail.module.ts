import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DetailPageComponent } from './detail-page.component';
import { SharedModule } from '../../shared/shared.module';
import { DetailDiagramPageComponent } from './detail-diagram-page/detail-diagram-page.component';
import { DetailTablePageComponent } from './detail-table-page/detail-table-page.component';
import { RouterModule } from '@angular/router';
import { StationDetailPageWrapperComponent } from './station-detail-page-wrapper/station-detail-page-wrapper.component';
import { DetailNavigationComponent } from './detail-navigation/detail-navigation.component';
import { DetailPageService } from './detail-page.service';
import { MapComponent } from 'src/app/map/map.component';
import { AgGridModule } from 'ag-grid-angular';

@NgModule({
  declarations: [
    DetailPageComponent,
    DetailDiagramPageComponent,
    DetailTablePageComponent,
    StationDetailPageWrapperComponent,
    DetailNavigationComponent,
  ],
  imports: [
    CommonModule,
    SharedModule,
    RouterModule,
    AgGridModule.withComponents([]),
  ],
  exports: [
    DetailPageComponent,
    DetailDiagramPageComponent,
    DetailTablePageComponent,
    StationDetailPageWrapperComponent,
    MapComponent
  ],
  providers: [DetailPageService]
})
export class DetailModule {
}
