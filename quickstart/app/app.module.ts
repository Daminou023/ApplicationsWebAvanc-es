import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { HttpModule,JsonpModule }    from '@angular/http';

import { AppComponent }  from './app.component';
import { MainPageComponent} from './main-page.component';
import { AuthorsListComponent } from './authors-list.component';
import { AuthorsListAPIComponent } from './authors-list-api.component';
import { ArticlesListComponent } from './articles-list.component';
import { AuthorDetailComponent } from './author-detail.component';
import { AuthorAddComponent }  from './author-add.component';


import { AuthorService} from './authors.service';
import { AuthorAPIService } from './authors-api.service';
import { ArticleService } from './articles.service';

import { AppRoutingModule }     from './app-routing.module';



@NgModule({
  imports: [
    BrowserModule,
    HttpModule,
    FormsModule,
    AppRoutingModule,
    JsonpModule,

  ],
  declarations: [
    AppComponent,
    MainPageComponent,
    AuthorsListComponent,
    AuthorsListAPIComponent,
    ArticlesListComponent,
    AuthorDetailComponent,
    AuthorAddComponent
  ],
  bootstrap: [ AppComponent ],
  providers: [ AuthorService, ArticleService]
})
export class AppModule { }