import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { NgApexchartsModule } from 'ng-apexcharts';
import { AboutUsComponent } from './about-us.component';

describe('AboutUsComponent', () => {
  let spectator: Spectator<AboutUsComponent>;
  let component: AboutUsComponent;
  const createComponent = createComponentFactory<AboutUsComponent>({
    component: AboutUsComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
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
