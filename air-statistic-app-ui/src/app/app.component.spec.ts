import { RouterTestingModule } from '@angular/router/testing';
import { AppComponent } from './app.component';
import { NgApexchartsModule } from 'ng-apexcharts';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { ChartTestComponent } from './chart-test/chart-test.component';
import { TailwindTestComponent } from './tailwind-test/tailwind-test.component';
import { MenuComponent } from './menu/menu.component';

describe('AppComponent', () => {
  let spectator: Spectator<AppComponent>;
  let component: AppComponent;
  const createComponent = createComponentFactory<AppComponent>({
    component: AppComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
    ],
    declarations: [
      AppComponent,
      TailwindTestComponent,
      ChartTestComponent,
      MenuComponent,
    ],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create the app', () => {
    expect(component).toBeTruthy();
  });
});
