<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loueur extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'location',
        'description',
    ];

    public function cars() {
        return $this->hasMany('App\Models\Car');
    }
}
