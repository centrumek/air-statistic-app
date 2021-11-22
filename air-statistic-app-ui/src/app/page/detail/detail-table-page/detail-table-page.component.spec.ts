import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailTablePageComponent } from './detail-table-page.component';

describe('DetailTablePageComponent', () => {
  let component: DetailTablePageComponent;
  let fixture: ComponentFixture<DetailTablePageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [DetailTablePageComponent]
    })
      .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailTablePageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
