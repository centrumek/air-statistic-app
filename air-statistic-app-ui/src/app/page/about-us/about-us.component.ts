import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-about-us',
  templateUrl: './about-us.component.html',
  styleUrls: ['./about-us.component.scss']
})
export class AboutUsComponent implements OnInit {

  team = [
    {
      firstName: 'Paweł',
      lastName: 'Potaczała',
      email: 'pawel.potaczala@student.pk.edu.pl',
      role: 'Team Leader',
      avatar: '/assets/avatars/pawel.svg'
    },
    {
      firstName: 'Jakub',
      lastName: 'Rogala',
      email: 'jakub.rogala@student.pk.edu.pl',
      role: 'Backend engineer',
      avatar: '/assets/avatars/jakub.svg'
    },
    {
      firstName: 'Maciej',
      lastName: 'Maj',
      email: 'maciej.maj@student.pk.edu.pl',
      role: 'Backend engineer',
      avatar: '/assets/avatars/maciej.svg'
    },
    {
      firstName: 'Marcin',
      lastName: 'Pancerz',
      email: 'marcin.pancerz@student.pk.edu.pl',
      role: 'UI/UX engineer',
      avatar: '/assets/avatars/marcin.svg'
    },
    {
      firstName: 'Dominik',
      lastName: 'Jurkowski',
      email: 'dominik.jurkowski@student.pk.edu.pl',
      role: 'UI/UX engineer',
      avatar: '/assets/avatars/dominik.svg'
    },
    {
      firstName: 'Sławomir',
      lastName: 'Twardosz',
      email: 'slawomir.twardosz@student.pk.edu.pl',
      role: 'QA engineer',
      avatar: '/assets/avatars/slawek.svg'
    },
  ];

  constructor() {
  }

  ngOnInit(): void {
  }

}
