import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { DetailDiagramPageComponent } from './detail-diagram-page.component';
import { DetailNavigationComponent } from '../detail-navigation/detail-navigation.component';
import { SharedModule } from '../../../shared/shared.module';

describe('DetailDiagramPageComponent', () => {
  let spectator: Spectator<DetailDiagramPageComponent>;
  let component: DetailDiagramPageComponent;
  const createComponent = createComponentFactory<DetailDiagramPageComponent>({
    component: DetailDiagramPageComponent,
    imports: [
      RouterTestingModule,
      SharedModule,
    ],
    declarations: [DetailDiagramPageComponent, DetailNavigationComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create component', () => {
    expect(component).toBeTruthy();
  });
});
