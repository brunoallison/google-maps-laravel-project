<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $table = 'gmaps_geocache';

    protected $fillable = [
        'address',
        'latitude',
        'longitude'
    ];
}
