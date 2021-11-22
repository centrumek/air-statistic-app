import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailDiagramPageComponent } from './detail-diagram-page.component';

describe('DetailDiagramPageComponent', () => {
  let component: DetailDiagramPageComponent;
  let fixture: ComponentFixture<DetailDiagramPageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [DetailDiagramPageComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailDiagramPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
