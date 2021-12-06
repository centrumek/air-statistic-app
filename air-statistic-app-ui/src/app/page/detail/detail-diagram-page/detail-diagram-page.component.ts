import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-detail-diagram-page',
  templateUrl: './detail-diagram-page.component.html',
  styleUrls: ['./detail-diagram-page.component.scss']
})
export class DetailDiagramPageComponent implements OnInit {
  private standCode: string;

  constructor(private route: ActivatedRoute) {
    this.standCode = this.route.snapshot.params['standCode']
  }

  ngOnInit(): void {
  }

}
