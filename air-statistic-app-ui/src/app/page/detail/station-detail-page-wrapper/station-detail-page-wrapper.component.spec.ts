import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StationDetailPageWrapperComponent } from './station-detail-page-wrapper.component';

describe('StationDetailPageWrapperComponent', () => {
  let component: StationDetailPageWrapperComponent;
  let fixture: ComponentFixture<StationDetailPageWrapperComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [StationDetailPageWrapperComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(StationDetailPageWrapperComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
