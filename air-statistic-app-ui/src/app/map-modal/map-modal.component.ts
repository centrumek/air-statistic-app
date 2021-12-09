import { Component, Input, OnInit, Output, EventEmitter } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-map-modal',
  templateUrl: './map-modal.component.html',
  styleUrls: ['./map-modal.component.scss']
})
export class MapModalComponent implements OnInit {

  @Output() closeModal: EventEmitter<any>= new EventEmitter<any>();
  @Input() showModal?: boolean;
  @Input() station_name?: string;
  @Input() station_code?: string;

  constructor(private router: Router, private route: ActivatedRoute) {
  }

  ngOnInit(): void {
  }

  public toggleModal() {
    this.closeModal.emit();
  }

  public navigateToDiagramDetailPage(): void {
    this.router.navigate(['../dashboard/detail/station/', this.station_code], {relativeTo: this.route});
  }

}
