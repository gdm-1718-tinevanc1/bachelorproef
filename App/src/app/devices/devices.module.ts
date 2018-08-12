import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DevicesComponent } from './devices.component';
import { DeviceService } from './shared/services/device.service';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [DevicesComponent],
  providers: [DeviceService]
})
export class DevicesModule { }
