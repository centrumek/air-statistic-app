import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StationChartColumnComponent } from './station-chart-column.component';

describe('ChartColumnComponent', () => {
  let component: StationChartColumnComponent;
  let fixture: ComponentFixture<StationChartColumnComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [StationChartColumnComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(StationChartColumnComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
