import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { StationDetailPageWrapperComponent } from './station-detail-page-wrapper.component';
import { SharedModule } from '../../../shared/shared.module';

describe('StationDetailPageWrapperComponent', () => {
  let spectator: Spectator<StationDetailPageWrapperComponent>;
  let component: StationDetailPageWrapperComponent;
  const createComponent = createComponentFactory<StationDetailPageWrapperComponent>({
    component: StationDetailPageWrapperComponent,
    imports: [
      RouterTestingModule,
      SharedModule,
    ],
    declarations: [StationDetailPageWrapperComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create component', () => {
    expect(component).toBeTruthy();
  });
});
