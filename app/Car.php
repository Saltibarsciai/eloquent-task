<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function status(){
        return $this->belongsToMany(Status::class);
    }
}
