import { Component, OnInit } from '@angular/core';
import { Author } from './author';
import { AuthorAPIService } from './authors-api.service';
import { Router } from '@angular/router';

@Component({
  moduleId: module.id,
  selector: 'my-authors-add',
  templateUrl: 'author-add.component.html',
  styleUrls: ['authors-list.component.css'],
  providers: [AuthorAPIService]

})

export class AuthorAddComponent{ 
	
	title = 'Add an Author';
	author : Author;
	authors : Author[];

	constructor( 
		private authorAPIService: AuthorAPIService
		// private router: Router
	){}


addAuthorbyAPI(form:any){
		// this.author.name = "andy";
		console.log("you posted:", form);

		this.authorAPIService.addAuthorbyAPI(form);
        //        .subscribe(
        //         	authors => {this.authors = authors},
        //                err => console.log('Error:' +err)
        //        );               
    }



}