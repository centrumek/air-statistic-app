import { RouterTestingModule } from '@angular/router/testing';
import { NgApexchartsModule } from 'ng-apexcharts';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { ChartTestComponent } from './chart-test.component';

describe('ChartTestComponent', () => {
  let spectator: Spectator<ChartTestComponent>;
  let component: ChartTestComponent;
  const createComponent = createComponentFactory<ChartTestComponent>({
    component: ChartTestComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
    ],
    declarations: [
      ChartTestComponent
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
