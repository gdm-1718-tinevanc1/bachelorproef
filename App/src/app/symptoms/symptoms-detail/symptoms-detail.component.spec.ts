import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SymptomsDetailComponent } from './symptoms-detail.component';

describe('SymptomsDetailComponent', () => {
  let component: SymptomsDetailComponent;
  let fixture: ComponentFixture<SymptomsDetailComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SymptomsDetailComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SymptomsDetailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
