import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AngularFontAwesomeModule } from 'angular-font-awesome';

import { AppComponent } from './app.component';
import { CoreModule } from './core/core.module';

import { HomeModule } from './home/home.module';
import { AuthenticationModule } from './authentication/authentication.module';
import { DiseasesModule } from './diseases/diseases.module';
import { SymptomsModule } from './symptoms/symptoms.module';
import { DevicesModule } from './devices/devices.module';
import { RightsModule } from './rights/rights.module';
import { PractitionersModule } from './practitioners/practitioners.module';
import { ProfileModule } from './profile/profile.module';
import { FaqsModule } from './faqs/faqs.module';
import { ChecklistModule } from './checklist/checklist.module';
import { NewsModule } from './news/news.module';
import { TherapiesModule } from './therapies/therapies.module';
import { DisclaimerModule } from './disclaimer/disclaimer.module';
import { PrivacypolicyModule } from './privacypolicy/privacypolicy.module';

import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { MaterializeModule } from 'angular2-materialize';
import {FlashMessagesModule} from 'angular2-flash-messages';
// import { FlashMessagesService } from 'angular2-flash-messages/module/flash-messages.service';


@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    AppRoutingModule,
    CoreModule,
    HomeModule,
    AuthenticationModule,
    DiseasesModule,
    SymptomsModule,
    DevicesModule,
    PractitionersModule,
    RightsModule,
    FaqsModule,
    ChecklistModule,
    ProfileModule,
    NewsModule,
    TherapiesModule,
    DisclaimerModule,
    PrivacypolicyModule,
    HttpClientModule,
    AngularFontAwesomeModule,
    FontAwesomeModule,
    MaterializeModule,
    FlashMessagesModule.forRoot()
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
