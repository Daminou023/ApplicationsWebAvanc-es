import { Component, OnInit } from '@angular/core';
import { Author } from './author';
import { AuthorAPIService } from './authors-api.service';
import { Router } from '@angular/router';


@Component({
  moduleId: module.id,
  selector: 'my-authors',
  templateUrl: 'authors-list-api.component.html',
  styleUrls: ['authors-list.component.css'],
  providers: [AuthorAPIService]

})



export class AuthorsListAPIComponent implements OnInit { 
	title = 'List of Authors';
	selectedAuthor : Author;

	authors : Author[];
	APIauthors : Author[];


	constructor( 
		private authorAPIService: AuthorAPIService,
		private router: Router
	){}

	getAuthors(): void {
    this.authorAPIService.getAuthors().then(authors => this.authors = authors);

	 }

	getAuthorsbyAPI(){
		console.log("")
		this.authorAPIService.getAuthorsbyAPI()
                .subscribe(
                 	APIauthors => {this.APIauthors = APIauthors},
                           err => console.log('Error:' +err)
                );               
    }

    deleteAuthor(id:string) {
    	console.log("component",id);
        this.authorAPIService.deleteAuthorbyAPI(id)
        	.subscribe(
                 	APIauthors => {this.APIauthors = APIauthors},
                           err => console.log('Error:' +err)
                );               

    }

	ngOnInit():void{
		this.getAuthorsbyAPI();
	}
	
	
	onSelect(author: Author): void {
	  this.selectedAuthor = author;
	}

}







