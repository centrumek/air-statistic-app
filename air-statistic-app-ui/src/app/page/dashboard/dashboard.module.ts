import { NgModule } from '@angular/core';
import { NgApexchartsModule } from 'ng-apexcharts';
import { DashboardComponent } from './dashboard.component';
import { SharedModule } from '../../shared/shared.module';
import { SearchComponent } from './search/search.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { DASHBOARD_ROUTES } from './dashboard.routes';
import { RouterModule } from '@angular/router';
import { DetailModule } from '../detail/detail.module';
import { CommonModule } from '@angular/common';
import { StationSearchService } from '../../service/station-search.service';
import { AgGridModule } from 'ag-grid-angular';
import { SearchResultTableComponent } from './search-result-table/search-result-table.component';


@NgModule({
  declarations: [
    DashboardComponent,
    SearchComponent,
    SearchResultTableComponent,
  ],
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    NgApexchartsModule,
    SharedModule,
    DetailModule,
    RouterModule.forChild(DASHBOARD_ROUTES),
    AgGridModule.withComponents([]),
  ],
  exports: [DashboardComponent],
  providers: [StationSearchService]
})
export class DashboardModule {
}
