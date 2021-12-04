<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stands';

/*   public function station()
   {
       return $this->belongsTo(Station::class, 'station_code');
   }*/

    public function station()
    {
        return $this->hasMany('App\Models\Station', 'station_code', 'station_code');
    }

}
