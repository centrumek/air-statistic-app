<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Measurement;
use Illuminate\Support\Facades\DB;

class MeasurementController extends BaseController
{
    /**
     * show top 3 polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getMeasurementsForStation($id)
    {
        $location = DB::table('measurements')
            ->join('stands', 'measurements.stand_code', '=', 'stands.stand_code')
            ->join('stations', 'stations.station_code', '=', 'stands.station_code')
            ->selectRaw('DISTINCT ON ("measurements"."stand_code") "measurements".*, "stands".*, "stations"."voivodeship"')
            ->where('stands.station_code', '=', $id)
            ->groupBy('measurements.stand_code', 'measurements.id', 'stands.id', 'stations.id')
            ->get();


        if($location->isEmpty())
            return $this->sendError('Station ' . $id . ' not found', 404);

        return $this->sendResponse($location, 'Station ' . $id . ' retrieved successfully.');
    }

    /**
     * show top 3 polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getTopPollutedLocations()
    {
        $location = Measurement::with('stand')->orderByDesc('measurement_value')->limit(3)->get();

        if($location->isEmpty())
            return $this->sendError('Stations not found', 404);

        return $this->sendResponse($location, 'Station retrieved successfully.');
    }

    /**
     * show least 3 polluted locations
     * @return \Illuminate\Http\Response
     */
    public function getTopClearLocations()
    {
        $location = Measurement::with('stand')->orderBy('measurement_value', 'asc')->limit(3)->get();

        if($location->isEmpty())
            return $this->sendError('Stations not found', 404);

        return $this->sendResponse($location, 'Station retrieved successfully.');
    }

    /**
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function getArchiveStationData($id)
    {
        $station = Measurement::with('stand')->orderBy('measurement_date', 'desc')->paginate(20);

        if($station->isEmpty())
            return $this->sendError('Station not found', 404);

        return $this->sendResponse($station, 'Station retrieved successfully.');
    }
}

