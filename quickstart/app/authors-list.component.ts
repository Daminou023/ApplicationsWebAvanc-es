import { Component, OnInit } from '@angular/core';
import { Author } from './author';
import { AuthorService } from './authors.service';
import { Router } from '@angular/router';


@Component({
  moduleId: module.id,
  selector: 'my-authors',
  templateUrl: 'authors-list.component.html',
  styleUrls: ['authors-list.component.css'],
  providers: [AuthorService]

})



export class AuthorsListComponent implements OnInit { 
	title = 'List of Authors';
	selectedAuthor : Author;

	authors : Author[];


	constructor( 
		private authorService: AuthorService,
		private router: Router,
	){}

	getAuthors(): void {
    this.authorService.getAuthors().then(authors => this.authors = authors);

	 }

	ngOnInit():void{
		this.getAuthors();
	}
	
	
	onSelect(author: Author): void {
	  this.selectedAuthor = author;
	}

	gotoDetail(): void {
    this.router.navigate(['/info', this.selectedAuthor.id]);
  }
}







