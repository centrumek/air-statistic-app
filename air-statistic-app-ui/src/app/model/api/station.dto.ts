export interface StationDto {
  id: number;
  station_code: string;
  stand_code: string;
  indicator_code: string,
  indicator: string,
  international_code: string;
  station_name: string;
  old_station_code: string;
  start_date: string;
  close_date: string | null;
  station_type: string;
  location_type: string;
  station_kind: string;
  voivodeship: string;
  location: string;
  adress: string;
  wgs84_n: number;
  wgs84_e: number;
  averaging_time: string;
  measurement_type: string;
  zone_name: string;
}
