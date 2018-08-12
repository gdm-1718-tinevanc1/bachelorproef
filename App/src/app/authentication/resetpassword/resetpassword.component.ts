import { Component, OnInit } from '@angular/core';
import { FlashMessagesService } from 'angular2-flash-messages';
import { FormBuilder, Validators } from '@angular/forms';
import { FormService } from '../../core/shared/services/form.service';
import { AuthenticationService } from '../../core/shared/services/authentication.service'
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-resetpassword',
  templateUrl: './resetpassword.component.html',
  styleUrls: ['./resetpassword.component.scss']
})
export class ResetpasswordComponent implements OnInit {
  passwordShow = false;
  form;
  public formErrors = {
    password: '',
    email: '',
  };
  resetToken: null;
  constructor(private _flashMessagesService: FlashMessagesService,
     private fb: FormBuilder,
    public FormService: FormService,
    public authenticationService: AuthenticationService,
    public route:ActivatedRoute) 
    {
      route.queryParams.subscribe(params => {
        this.resetToken = params['token'];
      })
      this.form = fb.group({
        password: ['', Validators.compose([Validators.required])],
        email: ['', Validators.compose([Validators.required, Validators.email])],
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
      let creds = {
        password: this.form.value.password,
        email: this.form.value.email,
        token: this.resetToken
      }
  

      this.authenticationService.forgotpassword(creds).subscribe(
          res => {
            this._flashMessagesService.show('Uw wachtwoord is gereset, meld je opnieuw aan.', { cssClass: 'alert-success', timeout: 3000 });
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

  showPassword(){
    if($('#password').attr('type') === "password"){
      $('#password').attr('type', 'text');
      this.passwordShow = true;

    }else{
      $('#password').attr('type', 'password');
      this.passwordShow = false;
    }
  }


}
