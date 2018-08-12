import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SymptomsListComponent } from './symptoms-list.component';

describe('SymptomsListComponent', () => {
  let component: SymptomsListComponent;
  let fixture: ComponentFixture<SymptomsListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SymptomsListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SymptomsListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
