import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ManualComponent } from './manual/manual.component';
import { ExerciseComponent } from './exercise/exercise.component';
import { ExamplesComponent } from './examples/examples.component';
import { TherapyService } from './shared/services/therapy.service';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [ManualComponent, ExerciseComponent, ExamplesComponent],
  providers: [TherapyService]
})
export class TherapiesModule { }
