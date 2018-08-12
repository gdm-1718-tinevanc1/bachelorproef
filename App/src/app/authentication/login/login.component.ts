import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from '../../core/shared/services/authentication.service'
import { FormBuilder, Validators } from '../../../../node_modules/@angular/forms';
import { FormService } from '../../core/shared/services/form.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  form;
  public formErrors = {
    username: '',
    password: '',
  };
  constructor(private authenticationService:AuthenticationService,
    private fb: FormBuilder,
    public FormService: FormService,) 
    {
      this.form = fb.group({
        username: ['', Validators.required],
        password: [null, Validators.required],
      });

      this.form.valueChanges.subscribe((data) => {
        this.formErrors = this.FormService.validateForm(this.form, this.formErrors, true)
      });
     }

  ngOnInit() {
    console.log(this.authenticationService.user.authenticated);
  }

  save(){
    this.FormService.markFormGroupTouched(this.form);
    if (this.form.valid) {

      this.authenticationService.login(this.form.value);

      this.form.reset();
    } else {
      this.formErrors = this.FormService.validateForm(this.form, this.formErrors, false)
      console.log(this.formErrors);
    }

  }

}
