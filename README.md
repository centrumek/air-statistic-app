# air-statistic-app

The application exposes end-user UI interface and backend API for an open-source
[dataset](http://powietrze.gios.gov.pl/pjp/archives) visualisation came from [GIOŚ](https://www.gios.gov.pl/en).

## Motivation

As part of completing the IT project management course at Tadeusz Kościuszko University of Technology,
we've created an application called **AirFree** to visualise a [dataset](http://powietrze.gios.gov.pl/pjp/archives)
of [GIOŚ](https://www.gios.gov.pl/en) - Chief Inspectorate of Environmental Protection.

The goal of this project wasn't only the application, but also the possibility to learn team/time management,
use Agile methodology, prioritize tasks or make new friends being a team.

## Project Vision

Nowadays, we can often experience air pollution, especially in cities.
We are struggling with it each year despite the fact that lots of effort was already put in.
The vision of this project focuses on air pollution data visualisation coming from a set of stations to compare if we go in the right direction as a society.

### Functionalities
 
1. Dashboard View - Cities widgets, stations search console with basic filter options, results pagination.
2. Detailed View - All stands with basic measurement plots for a certain station.
3. Detailed Diagram View - Advanced measurement plot of a certain stand.
4. Detailed Table View - Advanced measurement table of a certain stand.
5. Stations Search Console View - Multiple filter options, results pagination.
6. Map View - Interactive visualisation of all stations with basic filter options.
7. Stations Statistics View - Results pagination with station code, stand, measurement type, status, age etc.
8. Stands Information View - Simple, meaningful description of all stands.
9. About Us View - Information about project contributors.

### Use Case Diagrams

```puml
left to right direction

actor "Guest" as g1

rectangle "Dashboard View" as r1 {
    (Search Button) as sb
    (Click Action) as ca
    (View Action) as va
    (Cities Widgets) as cw
    (Stations Search Console View) as sscv
    (Detailed View) as dv
    (About Us View) as auv
    (Map View) as mv
    (Basic Filter Options) as bfo

    g1 -- sb
    sb ..> sscv : include

    g1 -- ca
    ca ..> auv : extends  
    ca ..> mv : extends 

    g1 -- va
    va ..> cw : include
    va ..> sscv : include

    bfo .> sscv : extends
    sscv ...> dv : extends
}
```

```puml
left to right direction

actor "Guest" as g1

rectangle "Detailed View" as r1 {
    (Click Action) as ca
    (View Action) as va
    (Station Masurement Plots) as smp
    (Dashboard View) as dv
    (About Us View) as auv
    (Map View) as mv
    (Detailed Diagram/Table View) as ddtv

    g1 -- ca
    ca ..> auv : extends  
    ca ..> mv : extends
    ca ..> dv : extends
    ca ..> smp : extends
    
    g1 -- va
    va ..> smp : include

    smp ...> ddtv : extends
}
```

```puml
left to right direction

actor "Guest" as g1

rectangle "Stations Statistics View" as r1 {
    (Click Action) as ca
    (View Action) as va
    (Pagination Results) as pr
    (Sorting Options) as fo
    (About Us View) as auv
    (Map View) as mv
    (Dashboard View) as dv

    g1 -- ca
    ca ..> auv : extends  
    ca ..> mv : extends
    ca ..> dv : extends
    ca ..> fo : extends
    
    g1 -- va
    va ..> pr : include
}
```

```puml
left to right direction

actor "Guest" as g1

rectangle "Map View" as r1 {
    (Click Action) as ca
    (View Action) as va
    (Search Button) as sb
    (Stations Search Console View) as sscv
    (Basic Filter Options) as bfo
    (About Us View) as auv
    (Dashboard View) as dv
    (Interactive Map) as im
    (Detailed View) as dev

    g1 -- ca
    ca ..> auv : extends  
    ca ..> dv : extends
    ca ..> im : extends
    
    g1 -- va
    va ..> im : include

    g1 -- sb
    sb ..> sscv : include

    im ...> dev : extends
    sscv ...> dev : extends
    bfo ..> sscv : extends
}
```

```puml
left to right direction

actor "Guest" as g1

rectangle "About Us View" as r1 {
    (Click Action) as ca
    (View Action) as va
    (Map View) as mv
    (Dashboard View) as dv
    (Owners List) as ol

    g1 -- ca
    ca ..> mv : extends
    ca ..> dv : extends
    
    g1 -- va
    va ..> ol : include
}
```

### Architecture Diagram

```puml
left to right direction

cloud Network {

    node c1 <<Docker>> as "container" {
        rectangle ui <<Angular>> as "air-statistic-app-ui"{
        }
    }
    
    node c2 <<Docker>> as "container" {
        rectangle api <<Laravel>> as "air-statistic-app-api"{
        }
    }
    
    node c3 <<Docker>> as "container"{
        database db <<PostgreSQL>> as "air-statistic-app-data" {
        }
    }

    ui <--[bold]--> api : [REST/HTTP]
    api <--[bold]--> db : [TCP/IP]
}

```

### Entity Relationship Diagram

```puml
left to right direction

entity "stations" as e2 {
    id <<PK>> \t\t\t\t\t\t Integer
    station_code <<U, NN>> \t\t\t Text
    international_code <<U>> \t\t Char(7)
    station_name <<U, NN>> \t\t Text
    old_station_code <<U>> \t\t\t Text
    start_date <<NN>> \t\t\t\t Date
    close_date \t\t\t\t\t Date
    station_type <<NN>> \t\t\t Text
    location_type <<NN>> \t\t\t Text
    station_kind <<NN>> \t\t\t Text
    voivodeship <<NN>> \t\t\t Text
    location \t\t\t\t\t\t Text
    address \t\t\t\t\t\t Text
    WGS84_N <<NN>> \t\t\t\t Real
    WGS84_E <<NN>> \t\t\t\t Real
}

entity "stands" as e3 {
    id <<PK>> \t\t\t\t\t\t Integer
    stand_code <<U, NN>> \t\t\t Text
    station_code <<FK>> \t\t\t Text
    indicator_code <<NN>> \t\t\t Text
    indicator \t\t\t\t\t Integer
    averaging_time <<NN>> \t\t\t Text
    measurement_type <<NN>> \t\t Text
    zone_name \t\t\t\t\t Text
}

entity "measurement" as e4 {
    id <<PK>> \t\t\t\t\t\t Integer
    stand_code <<FK>> \t\t\t\t Text
    measurement_date <<U, NN>> \t Timestamp
    measurement_value \t\t\t Real
}

e2 ||..|{ e3
e3 ||..|{ e4

```

## Technology stack

### Frontend
- **Angular 12.2** - Framework/Platform for building mobile and desktop web applications.
- **Jest 27.3.1** - JavaScript testing framework designed to ensure correctness of any JavaScript codebase.
- **AG Grid 26.2.0** - AG Grid is a feature rich datagrid designed for the major JavaScript Frameworks.
- **Apexchart.js 3.29.0** - Modern charting library that helps developers to create beautiful and interactive visualizations for web pages.
- **Mapbox GL JS 2.6.1** - JavaScript library for interactive, customizable vector maps on the web.

### Backend
- **PHP8.0** - general-purpose scripting language geared towards web development
- **Laravel 8** - Web application framework with expressive, elegant syntax for API creation.

### Database
- **PostgreSQL 14.0** - Open source, relational database management system.
- **pgAdmin 6.2** - Open source administration and development platform for PostgreSQL.
- **Python 3.9** - Used for data transformation coming from GIOŚ.

### Tests
- **Python 3.9 + PyTest** - framework for automated test  
