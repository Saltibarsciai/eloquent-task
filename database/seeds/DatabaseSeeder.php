<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(StatusesSeeder::class);
         $this->call(SegmentsSeeder::class);
         $this->call(UsersSeeder::class);
         $this->call(CarsSeeder::class);
         $this->call(CarStatusSeeder::class);
         $this->call(CarsManagementSeeder::class);
    }
}
