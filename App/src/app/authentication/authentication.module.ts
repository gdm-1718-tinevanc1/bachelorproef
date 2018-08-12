import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LoginComponent } from './login/login.component';
import { AppRoutingModule } from './../app-routing.module';
import { RegisterComponent } from './register/register.component';
import { AuthenticationService } from '../core/shared/services/authentication.service';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { ForgotpasswordComponent } from './forgotpassword/forgotpassword.component';
import { ResetpasswordComponent } from './resetpassword/resetpassword.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    AppRoutingModule,
    ReactiveFormsModule
  ],
  declarations: [LoginComponent, RegisterComponent, ForgotpasswordComponent, ResetpasswordComponent],
  providers: [AuthenticationService]
})
export class AuthenticationModule { }
