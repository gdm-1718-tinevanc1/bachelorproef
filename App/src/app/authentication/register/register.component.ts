import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from '../../core/shared/services/authentication.service'
import { CountriesService } from '../../core/shared/services/countries.service';
import { ICountry } from '../../core/shared/models/icountry';
import { FormBuilder, Validators } from '@angular/forms';
import { FormService } from '../../core/shared/services/form.service';
declare let $: any;

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {
  rolePractitioner;
  passwordShow = false;

  form;
  public formErrors = {
    username: '',
    email: '',
    password: '',
    firstname: '',
    lastname: '',
    phonenumber: '',
    city: '',
    country_id: null,
    rizivnumber: '',
    function: '',
  };

  countries: Array<ICountry>;

  constructor(
    private authenticationService:AuthenticationService,
    private countriesService:CountriesService,
    private fb: FormBuilder,
    public FormService: FormService) 
    { 
      this.form = fb.group({
        username: ['', Validators.required],
        email: ['', Validators.compose([Validators.required, Validators.email])],
        password: ['', Validators.required],
        firstname: ['', Validators.required],
        lastname: ['', Validators.required],
        phonenumber: ['', Validators.compose([Validators.required, Validators.pattern('(^\\+[0-9]{2}|^\\+[0-9]{2}\\(0\\)|^\\(\\+[0-9]{2}\\)\\(0\\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\\-\\s]{10}$)')])],
        city: ['', Validators.required],
        country_id: ['', Validators.required],
      });

      this.form.valueChanges.subscribe((data) => {
        this.formErrors = this.FormService.validateForm(this.form, this.formErrors, true)
      });
    }

  ngOnInit() {
    this.countriesService.getCountries().subscribe(
      data => {
        this.countries = data
      },
      err => console.error(err),
     );
  }

  save(){
    this.FormService.markFormGroupTouched(this.form);
    if (this.form.valid) {

      this.authenticationService.register(this.form.value);
      this.form.reset();
    } else {
      this.formErrors = this.FormService.validateForm(this.form, this.formErrors, false)
      console.log(this.formErrors);
    }
  }

  roleChange(){
    if(!this.rolePractitioner){
      this.form = this.fb.group({
        username: ['', Validators.required],
        email: ['', Validators.compose([Validators.required, Validators.email])],
        password: ['', Validators.required],
        firstname: ['', Validators.required],
        lastname: ['', Validators.required],
        phonenumber: ['', Validators.compose([Validators.required, Validators.pattern('(^\\+[0-9]{2}|^\\+[0-9]{2}\\(0\\)|^\\(\\+[0-9]{2}\\)\\(0\\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\\-\\s]{10}$)')])],
        city: ['', Validators.required],
        country_id: ['', Validators.required],
        rizivnumber: ['', Validators.required, Validators.pattern('^[0-9]-[0-9]{5}-[0-9]{2}-[0-9]{3}$')],
        function: ['', Validators.required],
      })
    } else{
      this.form = this.fb.group({
        username: ['', Validators.required],
        email: ['', Validators.compose([Validators.required, Validators.email])],
        password: ['', Validators.required],
        firstname: ['', Validators.required],
        lastname: ['', Validators.required],
        phonenumber: ['', Validators.compose([Validators.required, Validators.pattern('(^\\+[0-9]{2}|^\\+[0-9]{2}\\(0\\)|^\\(\\+[0-9]{2}\\)\\(0\\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\\-\\s]{10}$)')])],
        city: ['', Validators.required],
        country_id: ['', Validators.required],
      });

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



  // togglePractitioner(){
  //   this.infoPractitioner = true;
  // }

}
