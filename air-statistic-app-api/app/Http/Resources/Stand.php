<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Stand extends JsonResource
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
            'stand_code' => $this->stand_code,
            'station_code' => $this->station_code,
            'indicator_code' => $this->indicator_code,
            'indicator' => $this->indicator,
            'averaging_time' => $this->averaging_time,
            'measurement_type' => $this->measurement_type,
            'zone_name' => $this->zone_name,
        ];
    }
}
