import { Stand } from './stand.dto';

export interface StationMeasurementDto {
  // id: number;
  stand_code: string;
  indicator_code: string;
  indicator: string;
  measurement_dates: string;
  measurement_values: string;
}
