<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Station extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'station_code' => $this->station_code,
            'international_code' => $this->international_code,
            'station_name' => $this->station_name,
            'old_station_code' => $this->old_station_code,
            'start_date' => $this->start_date,
            'close_date' => $this->close_date,
            'station_type' => $this->station_type,
            'location_type' => $this->location_type,
            'station_kind' => $this->station_kind,
            'voivodeship' => $this->voivodeship,
            'location' => $this->location,
            'adress' => $this->adress,
            'wgs84_n' => $this->wgs84_n,
            'wgs84_e' => $this->wgs84_e,
        ];
    }
}
