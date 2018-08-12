import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NewsComponent } from './news.component';
import { NewsService } from './shared/service/news.service';

@NgModule({
  imports: [
    CommonModule,
  ],
  declarations: [NewsComponent],
  providers: [NewsService]
})
export class NewsModule { }
