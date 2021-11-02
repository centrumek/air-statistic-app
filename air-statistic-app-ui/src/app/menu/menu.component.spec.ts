import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { MenuComponent } from './menu.component';
import { NgApexchartsModule } from 'ng-apexcharts';


describe('MenuComponent', () => {
  let spectator: Spectator<MenuComponent>;
  let component: MenuComponent;
  const createComponent = createComponentFactory<MenuComponent>({
    component: MenuComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
    ],
    declarations: [
      MenuComponent
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
