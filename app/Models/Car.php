<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'car_id',
        'type',
        'brand',
        'immatriculation',
        'image'
    ];

    public function loueurs() {
        return $this->belongsTo('App\Models\Hotel');
    }
}
