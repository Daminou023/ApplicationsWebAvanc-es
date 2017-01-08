import { Component, OnInit } from '@angular/core';
import { Article } from './article';
import { ArticleService } from './articles.service';


@Component({
  selector: 'my-articles',
  template: `
        <h1>{{title}}</h1>
         
        <h2>All articles</h2>
          <ul class = "articles">
            <li *ngFor="let article of articles"> 
              <span class = "badge">{{article.id}}:</span>
              <ul>
                <li>Name: {{article.articleTitle}}</li>
                <li>Content: {{article.content}}</li>
              </ul>
            </li>
          </ul>

        `,

  styles: [`
  .selected {
    background-color: #CFD8DC !important;
    color: white;
  }
  .articles {
    margin: 0 0 2em 0;
    list-style-type: none;
    padding: 0;
    width: 15em;
  }
  
  .articles li {
    cursor: pointer;
    position: relative;
    left: 0;
    background-color: #EEE;
    margin: .5em;
    padding: .3em 0;
    border-radius: 4px;
  }
  
  .articles .text {
    position: relative;
    top: -3px;
  }
  .articles .badge {
    display: inline-block;
    font-size: small;
    color: white;
    padding: 0.8em 0.7em 0 0.7em;
    background-color: #607D8B;
    line-height: 1em;
    position: relative;
    left: -1px;
    top: -4px;
    height: 1.8em;
    margin-right: .8em;
    border-radius: 4px 0 0 4px;
  }  
    
`],
providers: [ArticleService]

})



export class ArticlesListComponent implements OnInit { 
  title = 'List of articles';

  articles : Article[];


  constructor(private articleService: ArticleService ) { }

  getArticles(): void {
    this.articleService.getArticles().then(articles => this.articles = articles);
    
   }

  ngOnInit():void{
    this.getArticles();
  }

}







