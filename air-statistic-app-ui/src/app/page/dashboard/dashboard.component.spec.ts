import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { NgApexchartsModule } from 'ng-apexcharts';
import { DashboardComponent } from './dashboard.component';
import { SharedModule } from '../../shared/shared.module';

describe('DashboardComponent', () => {
  let spectator: Spectator<DashboardComponent>;
  let component: DashboardComponent;
  const createComponent = createComponentFactory<DashboardComponent>({
    component: DashboardComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
      SharedModule,
    ],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create the component', () => {
    expect(component).toBeTruthy();
  });
});
