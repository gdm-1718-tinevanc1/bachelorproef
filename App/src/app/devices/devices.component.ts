import { Component, OnInit } from '@angular/core';
import * as $ from 'jquery';
import { Routes, RouterModule } from '@angular/router';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { DeviceService } from './shared/services/device.service';
import { IDevice } from './shared/models/idevice';

@Component({
  selector: 'app-devices',
  templateUrl: './devices.component.html',
  styleUrls: ['./devices.component.scss']
})
export class DevicesComponent implements OnInit {
  devices: Array<IDevice>;
  title: string;
  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private deviceService: DeviceService
  ) { }

  ngOnInit() {
    /* load svg */
    var svgUrl    = "assets/svg/humanbody.svg";    
    $.get(svgUrl)
      .then(injectSvg)
      
    function injectSvg(xmlDoc) {
      var svg = $(xmlDoc).find("svg");
      $("#bodySvg").append(svg);
    }

    /* get type by route */
     this.route.params.subscribe(params => {
      this.getDevicesByType(params['type']);
    });
  }

  getDevicesByType(type){
    this.title = this.route.snapshot.params['type'];
    this.deviceService.getDevicesByType(type).subscribe(
      data => {
        this.devices = data
        console.log(this.devices)
      });
  }

  getPart(e){
    if(e.target.id != "Body" && e.target.id != "Container"){
      $("#bodySvg").find('*').removeClass("focus")
      $(e.target).parent().children().addClass("focus")

      this.router.navigate(['/hulpmiddelen', e.target.id]);
    }
  }
}
