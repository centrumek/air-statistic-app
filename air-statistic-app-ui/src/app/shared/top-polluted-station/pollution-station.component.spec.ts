import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PollutionStationComponent } from './pollution-station.component';

describe('PollutionStationComponent', () => {
  let component: PollutionStationComponent;
  let fixture: ComponentFixture<PollutionStationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PollutionStationComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PollutionStationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
