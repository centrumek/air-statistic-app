export interface StationSearchResponse {
  id: number;
  station_code: string;
  international_code: string;
  station_name: string;
  old_station_code: string;
  start_date: string;
  close_date: string;
  station_type: string;
  location_type: string;
  station_kind: string;
  voivodeship: string;
  location: string;
  adress: string;
  wgs84_n: number;
  wgs84_e: number;
}
