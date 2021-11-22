<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Measurement;
use App\Models\Stand;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationController extends BaseController
{
    /**
     * show all stations
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $stations = DB::table('stations')->paginate(15);

        if($stations->isEmpty())
            return $this->sendError('Stations not found', 404);

        return $this->sendResponse($stations, 'Stations retrieved successfully.');
    }

    /**
     * show one station
     * @param $station_code
     * @return \Illuminate\Http\Response
     */
    public function getStation($station_code)
    {
        $station = DB::table('stations')->where('station_code', '=', $station_code)->get();

        if($station->isEmpty())
            return $this->sendError('Station not found', 404);

        return $this->sendResponse($station, 'Station retrieved successfully.');
    }

     /**
     * show stations - advanced query
     * @param $id
     * @return \Illuminate\Http\Response
     */
  /*
    public function getStationsAdv(Request $request)
    {
        $station = Stand::with('stations')->orderBy('measurement_date', 'desc')->paginate(20);

        if($station->isEmpty())
            return $this->sendError('Station not found', 404);

        return $this->sendResponse($station, 'Station retrieved successfully.');
    }
    */


}
