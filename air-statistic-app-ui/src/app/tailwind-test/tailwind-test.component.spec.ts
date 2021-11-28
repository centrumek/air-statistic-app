import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { TailwindTestComponent } from './tailwind-test.component';
import { NgApexchartsModule } from 'ng-apexcharts';


describe('TailwindTestComponent', () => {
  let spectator: Spectator<TailwindTestComponent>;
  let component: TailwindTestComponent;
  const createComponent = createComponentFactory<TailwindTestComponent>({
    component: TailwindTestComponent,
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
