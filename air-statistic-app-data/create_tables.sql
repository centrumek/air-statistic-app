

CREATE TABLE stations (
   id integer UNIQUE PRIMARY KEY,
   station_code text UNIQUE NOT NULL,
   international_code char(7),
   station_name text NOT NULL,
   old_station_code text NOT NULL,
   start_date date NOT NULL,
   close_date date,
   station_type text NOT NULL,
   location_type text NOT NULL,
   station_kind text NOT NULL,
   voivodeship text NOT NULL,
   location text,
   adress text,
   WGS84_N real NOT NULL,
   WGS84_E real NOT NULL
);

CREATE TABLE stands (
   id integer UNIQUE PRIMARY KEY,
   stand_code text UNIQUE NOT NULL,
   station_code text,
   indicator_code text NOT NULL,
   indicator text,
   averaging_time text NOT NULL,
   measurement_type text NOT NULL,
   zone_name text,
   FOREIGN KEY(station_code) REFERENCES stations(station_code)
);

CREATE TABLE measurements (
   id integer UNIQUE PRIMARY KEY,
   stand_code text NOT NULL,
   measurement_date date,
   measurement_value real,
   FOREIGN KEY(stand_code) REFERENCES stands(stand_code)
);

SET datestyle TO "German";

COPY stations(id,  station_code, international_code,  station_name, old_station_code, start_date, close_date, station_type, location_type, station_kind,voivodeship, location, adress, WGS84_N, WGS84_E)
FROM '/raw_data/stations.csv'
DELIMITER ';'
CSV HEADER;


COPY stands(id,  stand_code, station_code,  indicator_code, indicator, averaging_time, measurement_type, zone_name)
FROM '/raw_data/stands.csv'
DELIMITER ';'
CSV HEADER;


COPY measurements(id,  measurement_date, stand_code, measurement_value)
FROM '/raw_data/measurements.csv'
DELIMITER ','
CSV HEADER;

