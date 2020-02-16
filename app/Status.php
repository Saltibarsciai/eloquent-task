<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function car(){
        return $this->belongsToMany(Car::class);
    }
}
