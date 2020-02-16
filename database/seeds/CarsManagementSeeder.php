<?php

use App\CarManagement;
use Illuminate\Database\Seeder;

class CarsManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarManagement::class, 2000)->create();
    }
}
