import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { NgApexchartsModule } from 'ng-apexcharts';
import { SearchComponent } from './search.component';
import { SharedModule } from '../../../shared/shared.module';

describe('SearchPageComponent', () => {
  let spectator: Spectator<SearchComponent>;
  let component: SearchComponent;
  const createComponent = createComponentFactory<SearchComponent>({
    component: SearchComponent,
    imports: [
      RouterTestingModule,
      NgApexchartsModule,
      SharedModule,
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
