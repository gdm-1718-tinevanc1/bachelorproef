import { Component, OnInit } from '@angular/core';
import { FlashMessagesService } from 'angular2-flash-messages';
import { FormBuilder, Validators } from '@angular/forms';
import { FormService } from '../../core/shared/services/form.service';
import { AuthenticationService } from '../../core/shared/services/authentication.service'



@Component({
  selector: 'app-forgotpassword',
  templateUrl: './forgotpassword.component.html',
  styleUrls: ['./forgotpassword.component.scss']
})
export class ForgotpasswordComponent implements OnInit {
  form;
  public formErrors = {
    email: '',
  };
  constructor( private _flashMessagesService: FlashMessagesService,
    private fb: FormBuilder,
    public FormService: FormService,
    public authenticationService: AuthenticationService) 
    {
      this.form = fb.group({
        email: ['', Validators.compose([Validators.required, Validators.email])]
      });

      this.form.valueChanges.subscribe((data) => {
        this.formErrors = this.FormService.validateForm(this.form, this.formErrors, true)
      });
     }

  ngOnInit() {
  }

  save() {

    this.FormService.markFormGroupTouched(this.form);
    if (this.form.valid) {

      this.authenticationService.forgotpassword(this.form.value).subscribe(
          res => {
            this._flashMessagesService.show('Mail succesvol verstuurd, bekijk u inbox.', { cssClass: 'alert-success', timeout: 3000 });
          },
          err => {
            console.log(err);
            this._flashMessagesService.show(`Er is een probleem, probeer nog eens opnieuw. ${err}`, { cssClass: 'alert-error', timeout: 3000 });
          }
        );
      this.form.reset();
    } else {
      this.formErrors = this.FormService.validateForm(this.form, this.formErrors, false)
      console.log(this.formErrors);
    }
  }

}
