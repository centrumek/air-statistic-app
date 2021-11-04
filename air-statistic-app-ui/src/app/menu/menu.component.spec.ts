import { RouterTestingModule } from '@angular/router/testing';
import { byText, Spectator } from '@ngneat/spectator';
import { createComponentFactory } from '@ngneat/spectator/jest';
import { MenuComponent } from './menu.component';
import { NgApexchartsModule } from 'ng-apexcharts';
import { Router } from '@angular/router';
import { fakeAsync, tick } from '@angular/core/testing';
import { ROUTES } from '../app-routing.module';
import { SharedModule } from '../shared.module';
import { DashboardModule } from '../page/dashboard/dashboard.module';
import { APP_BASE_HREF } from '@angular/common';

describe('MenuComponent', () => {
  let spectator: Spectator<MenuComponent>;
  let component: MenuComponent;
  let router: Router;

  const createComponent = createComponentFactory<MenuComponent>({
    component: MenuComponent,
    imports: [
      RouterTestingModule.withRoutes(ROUTES),
      NgApexchartsModule,
      DashboardModule,
      SharedModule,
    ],
    declarations: [
      MenuComponent,
    ],
    providers: [
      {provide: APP_BASE_HREF, useValue: '/'}
    ]
  });

  beforeEach(() => {
    spectator = createComponent();
    component = spectator.component;
    router = spectator.inject(Router);
  });

  it('should create the component', () => {
    expect(component).toBeTruthy();
  });

  it('should have dashboard button', () => {
    const dashboardButton = <HTMLLinkElement>spectator.query(byText('Dashboard'));
    expect(dashboardButton).toBeTruthy();
    expect(dashboardButton.textContent).toEqual('Dashboard');
  });

  it('should have about us button', () => {
    const dashboardButton = <HTMLLinkElement>spectator.query(byText('O nas'));
    expect(dashboardButton).toBeTruthy();
    expect(dashboardButton.textContent).toEqual('O nas');
  });

  it('should have search button', () => {
    const searchButton = <HTMLLinkElement>spectator.query(byText('Szukaj'));
    expect(searchButton).toBeTruthy();
    expect(searchButton.textContent?.trim()).toEqual('Szukaj');
  });

  it('should have air button', () => {
    const airButton = <HTMLLinkElement>spectator.query(byText('Air'));
    expect(airButton).toBeTruthy();
    expect(airButton.textContent?.trim()).toEqual('Air');
  });

  it('should navigate to dashboard after click on app logo', fakeAsync(() => {
    const logoButton = <HTMLLinkElement>spectator.query(byText('AirFree'));

    spectator.fixture.ngZone?.run(() => {
      router.initialNavigation();
      router.navigateByUrl('/about-us');
    });
    tick();

    spectator.click(logoButton);
    tick();

    expect(router.url).toBe(`/dashboard`);
  }));

  it('should navigate to dashboard', fakeAsync(() => {
    const dashboardButton = <HTMLLinkElement>spectator.query(byText('Dashboard'));

    spectator.fixture.ngZone?.run(() => {
      router.initialNavigation();
      router.navigateByUrl('/about-us');
    });
    tick();

    spectator.click(dashboardButton);
    tick();

    expect(router.url).toBe(`/dashboard`);
  }));

  it('should navigate to about us', fakeAsync(() => {
    const aboutUsButton = <HTMLLinkElement>spectator.query(byText('O nas'));

    spectator.fixture.ngZone?.run(() => {
      router.initialNavigation();
    });
    tick();

    spectator.click(aboutUsButton);
    tick();

    expect(router.url).toBe(`/about-us`);
  }));
});
