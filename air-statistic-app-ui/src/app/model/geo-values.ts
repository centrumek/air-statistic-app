export interface GeoValues {
  type: string,
  features: GeoValue[]
};

export interface GeoValue {
  type: string,
  properties: {
    station_code: string,
    station_name: string,
  },
  geometry: {
    type: string,
    coordinates: number[],
  },
};