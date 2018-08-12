import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FaqsComponent } from './faqs.component';
import { FaqsService } from './shared/services/faqs.service';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [FaqsComponent],
  providers: [FaqsService]
})
export class FaqsModule { }
