import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AppRoutingModule } from './../app-routing.module';
import { SymptomsListComponent } from './symptoms-list/symptoms-list.component';
import { SymptomsDetailComponent } from './symptoms-detail/symptoms-detail.component';
import { SymptomsService } from './shared/services/symptoms.service';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { SymptomsComponent } from './symptoms.component';

@NgModule({
  imports: [
    CommonModule,
    FontAwesomeModule,
    AppRoutingModule
  ],
  declarations: [SymptomsListComponent, SymptomsDetailComponent, SymptomsComponent],
  providers: [SymptomsService]
})
export class SymptomsModule { }
