import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ProfileService } from './shared/services/profile.service';
import { ProfileEditComponent } from './profile-edit/profile-edit.component';
import { AppRoutingModule } from './../app-routing.module';
import { MaterializeModule } from 'angular2-materialize';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    AppRoutingModule,
    MaterializeModule
  ],
  declarations: [ProfileEditComponent],
  providers: [ProfileService]
})
export class ProfileModule { }
