import { Stand } from './stand.dto';

export interface StationMeasurementDto {
  id: number;
  stand_code: string;
  measurement_date: string;
  measurement_value: string;
  stand: Stand[];
}
