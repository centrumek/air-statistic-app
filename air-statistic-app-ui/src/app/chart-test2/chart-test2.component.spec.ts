import { RouterTestingModule } from '@angular/router/testing';
import { NgApexchartsModule } from 'ng-apexcharts';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { ChartTest2Component } from './chart-test2.component';

describe('ChartTest2Component', () => {
  let spectator: Spectator<ChartTest2Component>;
  let component: ChartTest2Component;
  const createComponent = createComponentFactory<ChartTest2Component>({
    component: ChartTest2Component,
    imports: [
      RouterTestingModule,
      NgApexchartsModule
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
