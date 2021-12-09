import { Component } from '@angular/core';

@Component({
  selector: 'app-station-detail-page-wrapper',
  templateUrl: './station-detail-page-wrapper.component.html',
  styleUrls: ['./station-detail-page-wrapper.component.scss']
})
export class StationDetailPageWrapperComponent {
  
  public showModal = false;

  constructor() {
  }

  public toggleModal() {
    this.showModal = !this.showModal;

    const body = document.getElementsByTagName('body')[0];
    if (this.showModal) {
      body.style.overflow = "hidden";
    } else {
      body.style.overflow = "initial";
    }
  }
}
