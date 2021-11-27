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
        database db <<PostgreSQL>> as "air-statistic-app-db" {
        }
    }

    ui <--[bold]--> api : [REST/HTTP]
    api <--[bold]--> db : [TCP/IP]
}

```

### Entity Relationship Diagram

```puml
left to right direction

entity "station_codes" as e1 {
    id <<PK>> \t\t\t\t\t\t Integer
    old_station_code <<U, NN>> \t\t Text
    station_code <<FK>> \t\t\t Text
}

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

e1 ||..|| e2
e2 ||..|{ e3
e3 ||..|{ e4

```

### Functionalities
 
1. Dashboard View - Cities widgets, stations search console with basic filter options, results pagination.
2. Detail View - All stands with basic measurement plots for a certain station.
3. Detail Diagram View - Advanced measurement plot of a certain stand.
4. Detail Table View - Advanced measurement table of a certain stand.
5. Stations Search Console View - Multiple filter options, results pagination.
6. Map View - Interactive visualisation of all stations with basic filter options.
7. Stations Statistics View - Results pagination with station code, stand, measurement type, status, age etc.
8. Stands Information View - Simple, meaningful description of all stands.
9. About Us View - Information about project contributors.

## Technology stack

- Tool x.y.z
