import { Injectable } from '@angular/core';

import { Author } from './author';
import { authorsList } from './authors-collection';

@Injectable()
export class AuthorService {

	getAuthors() : Promise <Author[]>{
		return Promise.resolve(authorsList);
	}


  getAuthor(id: number): Promise<Author> {
    return this.getAuthors()
               .then(authors => authors.find(author => author.id === id));
  }


}