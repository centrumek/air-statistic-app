import { Stand } from './stand.dto';

export interface PollutedStationDto {
  id: number;
  stand_code: string;
  measurement_date: string;
  measurement_value: number;
  stand: Stand[];
}
