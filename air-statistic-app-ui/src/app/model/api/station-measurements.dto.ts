import { StationDto } from './station.dto';

export interface PollutionStationMeasurementsDto {
  station: StationDto[],
  values: number[];
}
