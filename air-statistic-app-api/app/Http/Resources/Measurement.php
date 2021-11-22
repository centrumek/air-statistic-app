<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Measurement extends JsonResource
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
            'measurement_date' => $this->measurement_date,
            'stand_code' => $this->stand_code,
            'measurement_value' => $this->measurement_value,
        ];
    }
}
