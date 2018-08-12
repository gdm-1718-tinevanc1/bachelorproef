import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { PractitionersComponent } from './practitioners.component';
import { PractitionerService } from './shared/services/practitioner.service';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule
  ],
  declarations: [PractitionersComponent],
  providers: [PractitionerService]
})
export class PractitionersModule { }
