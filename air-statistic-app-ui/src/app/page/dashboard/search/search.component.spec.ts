import { RouterTestingModule } from '@angular/router/testing';
import { Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { SearchComponent } from './search.component';
import { SharedModule } from '../../../shared/shared.module';
import { ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { ApiService } from '../../../service/api.service';
import { ApiEndpointProviderService } from '../../../service/api-endpoint-provider.service';

describe('SearchPageComponent', () => {
  let spectator: Spectator<SearchComponent>;
  let component: SearchComponent;
  const createComponent = createComponentFactory<SearchComponent>({
    component: SearchComponent,
    providers: [
      ApiService,
      ApiEndpointProviderService,
    ],
    imports: [
      RouterTestingModule,
      HttpClientModule,
      SharedModule,
      ReactiveFormsModule,
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
