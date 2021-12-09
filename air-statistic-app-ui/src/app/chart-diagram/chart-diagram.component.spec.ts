import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ChartDiagramComponent } from './chart-diagram.component';

describe('ChartDiagramComponent', () => {
  let component: ChartDiagramComponent;
  let fixture: ComponentFixture<ChartDiagramComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ChartDiagramComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ChartDiagramComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
