import { Component, OnInit } from '@angular/core';
import { IExercise } from '../shared/models/iexercise';
import { ITypeExercise } from '../shared/models/itypeexercise';
import { TherapyService } from '../shared/services/therapy.service';

@Component({
  selector: 'app-exercise',
  templateUrl: './exercise.component.html',
  styleUrls: ['./exercise.component.scss']
})
export class ExerciseComponent implements OnInit {
  exercises: Array<IExercise>
  types: Array<ITypeExercise>
  typeCorrect = 'all'
  constructor(private therapyService: TherapyService) { }

  ngOnInit() {
    this.therapyService.getExercisesTypes().subscribe(
      result => { this.types = result},
      err => console.log('err')
    )

    this.getAllExercises();
  }

  getAllExercises(){
    this.therapyService.getExercises().subscribe(
      result => { this.exercises = result },
      err => console.log('err')
    )
  }

  getExercisesByType(type){
    if(type == 'all'){
      this.getAllExercises();
    } else{
      this.therapyService.getExercisesByType(type).subscribe(
        data => { this.exercises = data });
    }
  }

  getTypeCorrect(event){
    this.typeCorrect = event;
  }

}
