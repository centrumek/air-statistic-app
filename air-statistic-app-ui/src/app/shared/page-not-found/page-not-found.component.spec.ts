import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { PageNotFoundComponent } from './page-not-found.component';

fdescribe('PageNotFoundComponent', () => {
  let spectator: Spectator<PageNotFoundComponent>;
  let component: PageNotFoundComponent;
  const createComponent = createComponentFactory<PageNotFoundComponent>({
    component: PageNotFoundComponent,
    imports: [
      RouterTestingModule
    ],
    declarations: [PageNotFoundComponent],
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
  });

  it('should create page not found component', () => {
    expect(component).toBeTruthy();
  });
});
