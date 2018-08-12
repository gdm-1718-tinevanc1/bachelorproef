import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RightsListComponent } from './rights-list/rights-list.component';
import { RightService } from './shared/services/right.service';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [RightsListComponent],
  providers: [RightService]
})
export class RightsModule { }
