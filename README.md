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

### Architecture diagram
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
