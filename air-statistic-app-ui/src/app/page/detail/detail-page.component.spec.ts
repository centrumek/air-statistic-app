import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { DetailPageComponent } from './detail-page.component';
import { SharedModule } from '../../shared/shared.module';

describe('DetailPageComponent', () => {
  let spectator: Spectator<DetailPageComponent>;
  let component: DetailPageComponent;
  const createComponent = createComponentFactory<DetailPageComponent>({
    component: DetailPageComponent,
    imports: [
      RouterTestingModule,
      SharedModule,
    ],
    declarations: [DetailPageComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create detail page component', () => {
    expect(component).toBeTruthy();
  });
});
