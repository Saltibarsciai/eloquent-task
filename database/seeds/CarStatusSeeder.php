<?php

use App\CarStatus;
use Illuminate\Database\Seeder;

class CarStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarStatus::class, 2000)->create();
    }
}
