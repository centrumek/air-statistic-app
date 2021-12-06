import { Component, Input, OnInit, Output } from '@angular/core';
import { EventEmitter } from '@angular/core';

import { parameters } from "./data";

@Component({
  selector: 'app-info-modal',
  templateUrl: './info-modal.component.html',
  styleUrls: ['./info-modal.component.scss']
})
export class InfoModalComponent implements OnInit {

  @Output() closeModal: EventEmitter<any>= new EventEmitter<any>();
  @Input() showModal?: boolean;

  public parameters;

  constructor() {
    this.parameters = parameters;
  }

  ngOnInit(): void {
  }

  public toggleModal() {
    this.closeModal.emit();
  }

}
