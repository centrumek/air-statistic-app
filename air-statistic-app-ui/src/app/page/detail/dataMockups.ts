import { StationMeasurement } from "src/app/model/station-measurement";

export const chartData: StationMeasurement[] = [
  {
    stand_code: "SkKielTargow-BaP(PM10)-24g",
    indicator_code: "BaP(PM10)",
    indicator: "benzo(a)piren w PM10",
    measurement_values: [0.05, 0.13, 0.15, 0.17, 0.18, 0.19],
    measurement_dates: ["2020-01-01", "2020-01-02", "2020-01-03", "2020-01-04", "2020-01-05", "2020-01-06"],
  },
  {
    stand_code: "SkKielTargow-NO-1g",
    indicator_code: "NO",
    indicator: "tlenek azotu",
    measurement_values: [0, 0.1, 0.2, 0.3, 0.4, 0.5],
    measurement_dates: ["2020-01-01", "2020-01-02", "2020-01-03", "2020-01-04", "2020-01-05", "2020-01-06"],
  },
  {
    stand_code: "SkKielTargow-PM2.5-24g",
    indicator_code: "PM2.5",
    indicator: "pył zawieszony PM2.5",
    measurement_values: [2.779773, 4.430896, 5.415211, 5.567979, 5.929078, 6.813932],
    measurement_dates: ["2020-01-01", "2020-01-02", "2020-01-03", "2020-01-04", "2020-01-05", "2020-01-06"]
  },
  {
    stand_code: "SkKielTargow-PM2.5-24g",
    indicator_code: "Gas.5",
    indicator: "pył GAS PM2.5",
    measurement_values: [2.779773, 4.430896, 5.415211, 5.567979, 5.929078, 6.813932],
    measurement_dates: ["2020-01-01", "2020-01-02", "2020-01-03", "2020-01-04", "2020-01-05", "2020-01-06"]
  },
  {
    stand_code: "SkKielTargow-PM2.5-24g",
    indicator_code: "CO",
    indicator: "pył CO PM2.5",
    measurement_values: [2.779773, 4.430896, 5.415211, 5.567979, 5.929078, 6.813932],
    measurement_dates: ["2020-01-01", "2020-01-02", "2020-01-03", "2020-01-04", "2020-01-05", "2020-01-06"]
  }
];