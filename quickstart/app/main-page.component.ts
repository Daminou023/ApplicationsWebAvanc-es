import { Component,OnInit } from '@angular/core';
import { Author } from './author';
import { AuthorService } from './authors.service';

@Component({
  moduleId:module.id,
  selector: 'my-main-page',
  templateUrl: 'main-page.component.html',
  styleUrls:['main-page.component.css'],
  providers: [AuthorService]
})


export class MainPageComponent implements OnInit {

 title = 'Best-selling Authors of the month';
 authors : Author[];


	constructor(private authorService: AuthorService ) { }

	getAuthors(): void {
    this.authorService.getAuthors().then(authors => this.authors = authors.slice(0,3));
    
	 }

	ngOnInit():void{
		this.getAuthors();
	}
}
