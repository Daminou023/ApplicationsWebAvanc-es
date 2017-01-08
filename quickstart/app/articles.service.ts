import { Injectable } from '@angular/core';
import { Article } from './article'
import { articlesList } from './articles-collection';

@Injectable()
export class ArticleService {
	getArticles() : Promise <Article[]>{
		return Promise.resolve(articlesList);
	}
}
