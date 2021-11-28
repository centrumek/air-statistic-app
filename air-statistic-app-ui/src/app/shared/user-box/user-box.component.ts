import { Component, Input, OnInit } from '@angular/core';
import { Person } from 'src/app/model/person';

@Component({
  selector: 'app-user-box',
  templateUrl: './user-box.component.html',
  styleUrls: ['./user-box.component.scss']
})
export class UserBoxComponent implements OnInit {

  @Input() person: Person;

  constructor() { 
    this.person = {
      firstName: "", 
      lastName: "",
      email: "",
      role: "",
      avatar: ""
    };
  }

  ngOnInit(): void {
  }

}
