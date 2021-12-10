import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { NgApexchartsModule } from 'ng-apexcharts';
import { DashboardModule } from './page/dashboard/dashboard.module';
import { SharedModule } from './shared/shared.module';
import { MenuComponent } from './menu/menu.component';
import { HTTP_INTERCEPTORS, HttpClientModule } from '@angular/common/http';
import { BackendInterceptor } from './config/backend.interceptor';
import { AgGridModule } from 'ag-grid-angular';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    NgApexchartsModule,
    DashboardModule,
    SharedModule.forRoot({
      mapboxToken: 'pk.eyJ1IjoiamRvbWluaWsiLCJhIjoiY2t3ejg5NDhwMDQ1NTJycWxuN2g1ZmNqZyJ9.KzlUFjYhzCK4fu87AcaEAg',
    }),
    HttpClientModule,
    AgGridModule.withComponents([]),
  ],
  bootstrap: [AppComponent],
  providers: [
    {provide: HTTP_INTERCEPTORS, useClass: BackendInterceptor, multi: true},
  ]
})
export class AppModule {
}
