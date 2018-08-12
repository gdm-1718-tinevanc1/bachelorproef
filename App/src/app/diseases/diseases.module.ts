import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DiseasesDetailComponent } from './diseases-detail/diseases-detail.component';
import { DiseaseService } from './shared/services/disease.service';
import { MaterializeModule } from 'angular2-materialize';

@NgModule({
  imports: [
    CommonModule,
    MaterializeModule
  ],
  declarations: [DiseasesDetailComponent],
  providers: [DiseaseService]
})
export class DiseasesModule { }
