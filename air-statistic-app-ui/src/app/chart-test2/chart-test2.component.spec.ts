import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ChartTest2Component } from './chart-test2.component';

describe('ChartTest2Component', () => {
  let component: ChartTest2Component;
  let fixture: ComponentFixture<ChartTest2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ChartTest2Component]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ChartTest2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
