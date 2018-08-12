import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DiseasesDetailComponent } from './diseases-detail.component';

describe('DiseasesDetailComponent', () => {
  let component: DiseasesDetailComponent;
  let fixture: ComponentFixture<DiseasesDetailComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DiseasesDetailComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DiseasesDetailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
