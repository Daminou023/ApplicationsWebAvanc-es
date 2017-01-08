import 'rxjs/add/operator/switchMap';

import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Params} from '@angular/router';
import { Location} from '@angular/common';


import { Author } from './author';
import { AuthorService } from './authors.service';


@Component({
	moduleId: module.id,
	selector:'my-author-detail',
	templateUrl: 'author-detail.component.html'
})



export class AuthorDetailComponent implements OnInit {
  author: Author;

  constructor(
    private authorService: AuthorService,
    private route: ActivatedRoute,
    private location: Location
  ) {}

  ngOnInit(): void {
    this.route.params
      .switchMap((params: Params) => this.authorService.getAuthor(+params['id']))
      .subscribe(author => this.author = author);
  }

  goBack(): void {
    this.location.back();
  }
}