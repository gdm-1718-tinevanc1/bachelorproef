import { TestBed, inject } from '@angular/core/testing';

import { TherapyService } from './therapy.service';

describe('TherapyService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [TherapyService]
    });
  });

  it('should be created', inject([TherapyService], (service: TherapyService) => {
    expect(service).toBeTruthy();
  }));
});
