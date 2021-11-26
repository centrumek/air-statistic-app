import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { DetailNavigationComponent } from './detail-navigation.component';

describe('DetailNavigationComponent', () => {
  let spectator: Spectator<DetailNavigationComponent>;
  let component: DetailNavigationComponent;
  const createComponent = createComponentFactory<DetailNavigationComponent>({
    component: DetailNavigationComponent,
    imports: [
      RouterTestingModule
    ],
    declarations: [DetailNavigationComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create back component', () => {
    expect(component).toBeTruthy();
  });
});
