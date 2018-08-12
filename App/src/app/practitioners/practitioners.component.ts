import { Component, OnInit } from '@angular/core';
import { PractitionerService } from './shared/services/practitioner.service';
import { IPractitioner } from './shared/models/ipractitioner';
import { ITypePractitioner } from './shared/models/itypepractitioner';
import { FlashMessagesService } from 'angular2-flash-messages';
import { FormBuilder, Validators } from '@angular/forms';
import { FormService } from '../core/shared/services/form.service';


@Component({
  selector: 'app-practitioners',
  templateUrl: './practitioners.component.html',
  styleUrls: ['./practitioners.component.scss']
})
export class PractitionersComponent implements OnInit {
  typepractitioners: Array<ITypePractitioner>;
  form;
  public formErrors = {
    regio: '',
    type_practitioner_id: '',
    email: '',
  };

  constructor(private practitionerService: PractitionerService,
    private _flashMessagesService: FlashMessagesService,
    private fb: FormBuilder,
    public FormService: FormService,
  ) { 
      this.form = fb.group({
        regio: ['', Validators.required],
        type_practitioner_id: [null, Validators.required],
        email: ['', Validators.compose([Validators.required, Validators.email])]
      });

      this.form.valueChanges.subscribe((data) => {
        this.formErrors = this.FormService.validateForm(this.form, this.formErrors, true)
      });
    }

  ngOnInit() {
    this.practitionerService.getPractitionersTypes().subscribe(
      result => { this.typepractitioners = result},
      err => console.log('err')
    )
  }

  save() {

    this.FormService.markFormGroupTouched(this.form);
    if (this.form.valid) {

      this.practitionerService.postAskPractitioner(this.form.value).subscribe(
          res => {
            this._flashMessagesService.show('Uw aanvraag word bekeken en u zal een mail ontvangen!', { cssClass: 'alert-success', timeout: 3000 });
          },
          err => {
            console.log(err);
            this._flashMessagesService.show('Er is een probleem, probeer nog eens opnieuw.', { cssClass: 'alert-error', timeout: 3000 });
          }
        );
      this.form.reset();
    } else {
      this.formErrors = this.FormService.validateForm(this.form, this.formErrors, false)
      console.log(this.formErrors);
    }
  }

}


