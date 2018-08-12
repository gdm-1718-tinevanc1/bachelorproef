import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ChecklistComponent } from './checklist.component';
import { FormsModule } from '@angular/forms';

@NgModule({
  imports: [
    CommonModule,
    FormsModule
  ],
  declarations: [ChecklistComponent]
})
export class ChecklistModule { }
