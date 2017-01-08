import { Component } from '@angular/core';


@Component({
  moduleId:module.id,
  selector: 'my-app',
  styleUrls: ['app.component.css'],
  template: `
    <h1>{{title}}</h1>

  <nav>
    <a routerLink = "/main"> Home </a>
    <a routerLink = "/authors"> Authors </a>
    <a routerLink = "/api/authors"> AuthorsAPI </a>
    <a routerLink = "/api/authors/add"> Add author API</a>
    <a routerLink = "/articles"> Articles </a>

  </nav>
  <router-outlet></router-outlet>
  `
})


export class AppComponent {
  title = 'Welcome to my blog app';

}

