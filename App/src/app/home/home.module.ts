import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HomeComponent } from './home.component';
import { AppRoutingModule } from './../app-routing.module';
import { ContactService } from './shared/service/contact.service';
import { NewsService } from '../news/shared/service/news.service';

@NgModule({
  imports: [
    CommonModule,
    AppRoutingModule,
    FormsModule
  ],
  declarations: [HomeComponent],
  providers: [ContactService, NewsService]
})
export class HomeModule { }
