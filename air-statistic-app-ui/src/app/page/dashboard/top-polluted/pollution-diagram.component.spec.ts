import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PollutionDiagramComponent } from './pollution-diagram.component';

describe('PollutionDiagramComponent', () => {
  let component: PollutionDiagramComponent;
  let fixture: ComponentFixture<PollutionDiagramComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PollutionDiagramComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PollutionDiagramComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
