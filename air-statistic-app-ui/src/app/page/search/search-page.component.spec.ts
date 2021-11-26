import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { SharedModule } from '../../shared/shared.module';
import { SearchPageComponent } from './search-page.component';

describe('SearchPageComponent', () => {
  let spectator: Spectator<SearchPageComponent>;
  let component: SearchPageComponent;
  const createComponent = createComponentFactory<SearchPageComponent>({
    component: SearchPageComponent,
    imports: [
      RouterTestingModule,
      SharedModule,
    ],
    declarations: [SearchPageComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create component', () => {
    expect(component).toBeTruthy();
  });
});
