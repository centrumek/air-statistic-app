# AirStatisticAppUi

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 12.2.11.

## Mockups

https://www.figma.com/file/2CUC7dWL6aN42UnMS5r8xs/ZPI_Project

## Development server

Run `npm start` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory.

## Running unit tests

Spectator library is used for unit tests. It simplifies work with angular TestBed.

https://github.com/ngneat/spectator

Run `npm test` to execute the unit tests via [Jest](https://jestjs.io/).

Run `npm run test:watch` to execute the unit tests in watch mode.

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI Overview and Command Reference](https://angular.io/cli) page.

## Libraries & Setup tutorials

https://apexcharts.com/docs/angular-charts/

https://www.universal-tutorial.com/angular-tutorials/angular-tailwindcss-integration

https://www.xfive.co/blog/testing-angular-faster-jest/

https://github.com/thymikee/jest-preset-angular

https://timdeschryver.dev/blog/integrate-jest-into-an-angular-application-and-library#adding-jest

## ui - backend - database

Database: 

Go to `air-statistic-app-data\docker` an run `docker compose up`

Backend:

Go to `air-statistic-app-data\api` an run `artisan serve`

## Endpoints

GET:
/api/station - get all stations
/api/station/{station_code} - get one station

/api/measurements/toppolluted - dashboard data - most polluted stand (DashBoardPage)
/api/measurements/leastpolluted - dashboard data - least polluted stand (DashBoardPage)

/api/measurements/archive/{stand_code}
/api/measurements/station/{station_name} - measurements for station (DetailPage)

/api/voivodeships  - list of voivodeship 

POST:
/api/getStationsAdv (SearchPage)

expected data: (only voivodeship is required)
{
    "voivodeship": "DOLNOLĽSKIE", 
    "location": "",
    "adress": "",
    "indicator": "",
    "measurement_type": "",
    "start_date": "",
    "close_date": "2003-12-31"
}
