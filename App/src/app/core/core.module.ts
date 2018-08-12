import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from './navbar/navbar.component';
import { AppRoutingModule } from './../app-routing.module';
import { CountriesService } from './shared/services/countries.service';
import { CoreService } from '../core/shared/services/core.service';
import { FormsModule } from '@angular/forms';
import { FooterComponent } from './footer/footer.component';
import { FormService } from './shared/services/form.service';

@NgModule({
  imports: [
    CommonModule,
    AppRoutingModule,
    FormsModule
  ],
  declarations: [
    NavbarComponent,
    FooterComponent
  ],
  exports: [
    NavbarComponent,
    FooterComponent
  ],
  providers: [CountriesService, CoreService, FormService]
})
export class CoreModule { }
