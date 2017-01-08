import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import {Observable} from 'rxjs/Rx';


// Import RxJs required methods
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';

import { Author } from './author';
import { authorsList } from './authors-collection';

@Injectable()
export class AuthorAPIService {

	constructor (private http: Http){}
	private authorsUrl = 'http://localhost/Symfony/web/app_dev.php/authors';

	getAuthors() : Promise <Author[]>{
		return Promise.resolve(authorsList);
	}


  getAuthor(id: number): Promise<Author> {
    return this.getAuthors()
               .then(authors => authors.find(author => author.id === id));
  }

 
  getAuthorsbyAPI():Observable<Author[]>{
      return this.http.get(`${this.authorsUrl}/list`)
                 .map((res:Response) => res.json());
     }

  addAuthorbyAPI(body: Object){
      console.log("services:",body);
      let headers = new Headers();
      headers.append('Content-Type', 'application/json');
      let options     = new RequestOptions({ headers: headers });

      return this.http.post('http://localhost/Symfony/web/app_dev.php/authors/create',JSON.stringify(body), options)
                      .subscribe(res => {
                      console.log('post result %o', res);})
    }   

  deleteAuthorbyAPI(id:string):Observable<Author[]>{
        console.log("id to delete:",id);

         return this.http.delete(`${this.authorsUrl}/remove/${id}`)
                        .map((res:Response) => res.json());

}
}