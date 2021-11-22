<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'measurements';

    public function stand()
    {
        return $this->hasMany('App\Models\Stand', 'stand_code', 'stand_code');
    }


}
