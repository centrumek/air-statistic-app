<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Measurement;
use App\Models\StationMeasurements;
use Illuminate\Support\Facades\DB;

class MeasurementController extends BaseController
{
    /**
     * show top 3 polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getMeasurementsForStation($station_code)
    {
        $location = DB::table('measurements')
            ->join('stands', 'measurements.stand_code', '=', 'stands.stand_code')
            ->join('stations', 'stations.station_code', '=', 'stands.station_code')
            ->selectRaw('DISTINCT ON ("measurements"."stand_code") "measurements".*, "stands".*, "stations"."voivodeship"')
            ->where('stands.station_code', '=', $station_code)
            ->groupBy('measurements.stand_code', 'measurements.id', 'stands.id', 'stations.id')
            ->get();


        if($location->isEmpty())
            return $this->sendError('Station ' . $station_code . ' not found', 404);

        return $this->sendResponse($location, 'Station ' . $station_code . ' retrieved successfully.');
    }

    /**
     * show top polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getTopPollutedLocations()
    {
        $stand_code = DB::table('measurements')
            ->select('stand_code', 'measurement_value')
            ->whereRaw("measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements) AND stand_code LIKE '%PM10%'")
            ->orderBy('measurement_value', 'desc')
            ->limit(1)
            ->distinct()
            ->get();

        $measurements = DB::table('measurements')
            ->select('measurement_value')
            ->whereRaw("measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements)")
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->orderBy('measurement_value', 'desc')
            ->get();

        $station = DB::table('stands')
            ->join('stations', 'stations.station_code', '=', 'stands.station_code')
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->get();

        $stationmeasurement = new StationMeasurements();
        $stationmeasurement->values = $measurements->map(function($value) {
            return $value->measurement_value;
        });

        $stationmeasurement->station = $station;

        return $this->sendResponse($stationmeasurement, 'Top polluted stand retrieved successfully.');
    }

    /**
     * show least polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getTopClearLocations()
    {
        $stand_code = DB::table('measurements')
            ->select('stand_code', 'measurement_value')
            ->whereRaw("measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements) AND stand_code LIKE '%PM10%'")
            ->orderBy('measurement_value', 'asc')
            ->limit(1)
            ->distinct()
            ->get();

        $measurements = DB::table('measurements')
            ->select('measurement_value')
            ->whereRaw("measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements)")
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->orderBy('measurement_value', 'asc')
            ->get();

        $station = DB::table('stands')
            ->join('stations', 'stations.station_code', '=', 'stands.station_code')
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->get();

        $stationmeasurement = new StationMeasurements();
        $stationmeasurement->values = $measurements->map(function($value) {
            return $value->measurement_value;
        });

        $stationmeasurement->station = $station;

        return $this->sendResponse($stationmeasurement, 'Top polluted stand retrieved successfully.');
    }

    /**
     * show avg polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getAvgPollutedStation()
    {
        $stand_code = DB::select(DB::raw("SELECT * FROM (SELECT stand_code, measurement_value, row_number() over () as rowid FROM (
                    SELECT DISTINCT stand_code, measurement_value
                    FROM measurements
                    WHERE measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements)
                    AND stand_code LIKE '%PM10%'
                    order by measurement_value desc) AS XYZ) AS ABC where rowid =


                    (SELECT COUNT(*)/2 as total FROM (SELECT DISTINCT stand_code, measurement_value
                    FROM measurements
                    WHERE measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements)
                    AND stand_code LIKE '%PM10%'
                    order by measurement_value desc) as XYZ);"));

        $measurements = DB::table('measurements')
            ->select('measurement_value')
            ->whereRaw("measurement_date >= (SELECT MAX(measurement_date)  - INTERVAL '7 days' FROM measurements)")
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->orderBy('measurement_value', 'asc')
            ->get();

        $station = DB::table('stands')
            ->join('stations', 'stations.station_code', '=', 'stands.station_code')
            ->where('stand_code', '=', $stand_code[0]->stand_code)
            ->get();

        $stationmeasurement = new StationMeasurements();
        $stationmeasurement->values = $measurements->map(function($value) {
            return $value->measurement_value;
        });

        $stationmeasurement->station = $station;

        return $this->sendResponse($stationmeasurement, 'Top polluted stand retrieved successfully.');
    }

    /**
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function getArchiveStationData($stand_code)
    {
        $station = Measurement::with('stand')
            ->where('stand_code', '=', $stand_code)
            ->orderBy('measurement_date', 'desc')
            ->paginate(20);

        if($station->isEmpty())
            return $this->sendError('Station not found', 404);

        return $this->sendResponse($station, 'Station retrieved successfully.');
    }
}

