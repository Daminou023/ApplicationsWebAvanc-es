import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AppComponent }  from './app.component';

import { AuthorsListComponent } from './authors-list.component';
import { AuthorsListAPIComponent } from './authors-list-api.component';
import { ArticlesListComponent } from './articles-list.component';
import { AuthorDetailComponent } from './author-detail.component';
import { MainPageComponent} from './main-page.component';
import { AuthorAddComponent } from './author-add.component';

import { AuthorService} from './authors.service';
import { ArticleService } from './articles.service';

import { RouterModule, Routes } from '@angular/router';



const routes: Routes = [
	{
      path:'',
      redirectTo:'/main',
      pathMatch:'full'
    },
    {
      path:'main',
      component: MainPageComponent
    },
    {
      path: 'authors',
      component : AuthorsListComponent
    },
    {
      path: 'api/authors',
      component : AuthorsListAPIComponent
    },
        {
      path: 'api/authors/add',
      component : AuthorAddComponent
    },
    {
      path: 'info/:id',
      component: AuthorDetailComponent
    },
    {
      path :'articles',
      component: ArticlesListComponent
    }
];


@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}