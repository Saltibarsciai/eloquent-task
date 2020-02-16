<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarManagement extends Model
{
    protected $guarded = [];

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function segment(){
        return $this->belongsTo(Segment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
