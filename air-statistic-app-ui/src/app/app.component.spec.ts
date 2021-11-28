import { RouterTestingModule } from '@angular/router/testing';
import { AppComponent } from './app.component';
import { NgApexchartsModule } from 'ng-apexcharts';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { SharedModule } from './shared/shared.module';
import { MenuComponent } from './menu/menu.component';

describe('AppComponent', () => {
  let spectator: Spectator<AppComponent>;
  let component: AppComponent;
  const createComponent = createComponentFactory<AppComponent>({
    component: AppComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
      SharedModule,
    ],
    declarations: [
      AppComponent,
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
