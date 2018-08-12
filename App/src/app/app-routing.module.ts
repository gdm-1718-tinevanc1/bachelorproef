import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DiseasesDetailComponent } from './diseases/diseases-detail/diseases-detail.component';
import { HomeComponent } from './home/home.component';
import { SymptomsComponent } from './symptoms/symptoms.component';
import { DevicesComponent } from './devices/devices.component';
import { RightsListComponent } from './rights/rights-list/rights-list.component';
import { PractitionersComponent } from './practitioners/practitioners.component';
import { ProfileEditComponent } from './profile/profile-edit/profile-edit.component';
import { FaqsComponent } from './faqs/faqs.component';
import { LoginComponent } from './authentication/login/login.component';
import { ForgotpasswordComponent } from './authentication/forgotpassword/forgotpassword.component';
import { ResetpasswordComponent } from './authentication/resetpassword/resetpassword.component';
import { RegisterComponent } from './authentication/register/register.component';
import { ChecklistComponent } from './checklist/checklist.component';
import { NewsComponent } from './news/news.component';
import { DisclaimerComponent } from './disclaimer/disclaimer.component';
import { PrivacypolicyComponent } from './privacypolicy/privacypolicy.component';

import { ExamplesComponent } from './therapies/examples/examples.component';
import { ExerciseComponent } from './therapies/exercise/exercise.component';
import { ManualComponent } from './therapies/manual/manual.component';

const routes: Routes = [
  { path: '', component: HomeComponent, pathMatch: 'full', data:{PageName:"home"}},
  { path: 'login', component: LoginComponent, data:{PageName:"login"} },
  { path: 'register', component: RegisterComponent, data:{PageName:"register"} },
  { path: 'forgot/password', component: ForgotpasswordComponent, data:{PageName:"forgotpassword"} },
  { path: 'reset/password', component: ResetpasswordComponent, data:{PageName:"reset"} },
  { path: 'info/:id', component: DiseasesDetailComponent, data:{PageName:"info"} },
  { path: 'klachten/:id', component: SymptomsComponent, data:{PageName:"symptoms"} },
  { path: 'hulpmiddelen', component: DevicesComponent, data:{PageName:"devices"} },
  { path: 'hulpmiddelen/:type', component: DevicesComponent, data:{PageName:"devices"} },
  { path: 'rechten', component: RightsListComponent, data:{PageName:"rights"} },
  { path: 'behandelaars', component: PractitionersComponent, data:{PageName:"practitioners"} },
  { path: 'profiel/edit', component: ProfileEditComponent, data:{PageName:"profile"} },
  { path: 'faqs', component: FaqsComponent, data:{PageName:"faqs"} },
  { path: 'checklist', component: ChecklistComponent, data:{PageName:"checklist"} },
  { path: 'nieuws', component: NewsComponent, data:{PageName:"news"} },
  { path: 'manueletherapie', component: ManualComponent, data:{PageName:"manualtherapy"} },
  { path: 'oefeningstherapie', component: ExerciseComponent, data:{PageName:"exercisetherapy"} },
  { path: 'voorbeeldsoefeningen', component: ExamplesComponent, data:{PageName:"exercisesexample"} },
  { path: 'disclaimer', component: DisclaimerComponent, data:{PageName:"disclaimer"} },
  { path: 'privacypolicy', component: PrivacypolicyComponent, data:{PageName:"privacypolicy"} },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
