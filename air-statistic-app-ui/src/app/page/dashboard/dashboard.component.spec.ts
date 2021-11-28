import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { NgApexchartsModule } from 'ng-apexcharts';
import { DashboardComponent } from './dashboard.component';
import { SharedModule } from '../../shared/shared.module';
import { SearchModule } from '../search/search.module';
import { SearchComponent } from './search/search.component';
import { ReactiveFormsModule } from '@angular/forms';
import { HttpClientTestingModule } from '@angular/common/http/testing';

describe('DashboardComponent', () => {
  let spectator: Spectator<DashboardComponent>;
  let component: DashboardComponent;
  const createComponent = createComponentFactory<DashboardComponent>({
    component: DashboardComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
      SharedModule,
      SearchModule,
      ReactiveFormsModule,
      HttpClientTestingModule,
    ],
    declarations: [SearchComponent]
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create the component', () => {
    expect(component).toBeTruthy();
  });
});
