import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { BackComponent } from './back.component';

describe('BackComponent', () => {
  let spectator: Spectator<BackComponent>;
  let component: BackComponent;
  const createComponent = createComponentFactory<BackComponent>({
    component: BackComponent,
    imports: [
      RouterTestingModule
    ],
    declarations: [BackComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create back component', () => {
    expect(component).toBeTruthy();
  });
});
