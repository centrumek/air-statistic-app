import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { DetailTablePageComponent } from './detail-table-page.component';
import { DetailNavigationComponent } from '../detail-navigation/detail-navigation.component';

describe('DetailTablePageComponent', () => {
  let spectator: Spectator<DetailTablePageComponent>;
  let component: DetailTablePageComponent;
  const createComponent = createComponentFactory<DetailTablePageComponent>({
    component: DetailTablePageComponent,
    imports: [
      RouterTestingModule
    ],
    declarations: [DetailTablePageComponent, DetailNavigationComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create the component', () => {
    expect(component).toBeTruthy();
  });
});
