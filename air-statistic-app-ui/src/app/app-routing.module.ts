import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './page/dashboard/dashboard.component';
import { AboutUsComponent } from './page/about-us/about-us.component';
import { SearchPageComponent } from './page/search/search-page.component';
import { PageNotFoundComponent } from './shared/page-not-found/page-not-found.component';

export const ROUTES: Routes = [
  {
    path: '',
    redirectTo: 'dashboard',
    pathMatch: 'full'
  },
  {
    path: 'dashboard',
    loadChildren: () => import('./page/dashboard/dashboard.module').then(m => m.DashboardModule),
  },
  {
    path: 'about-us',
    component: AboutUsComponent
  },
  {
    path: 'search',
    component: SearchPageComponent,
  },
  {
    path: '**',
    component: PageNotFoundComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(ROUTES)],
  exports: [RouterModule]
})
export class AppRoutingModule {
}
