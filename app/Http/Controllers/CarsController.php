<?php

namespace App\Http\Controllers;

use App\CarManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __invoke()
    {
        $carsInfo = CarManagement::with(["user", "segment", "car", "status"])
            ->join('car_status', 'car_managements.car_id', '=', "car_status.car_id")
            ->orderBy('car_status.id', 'ASC')->get();

        return view('welcome', compact('carsInfo'));
    }
}
