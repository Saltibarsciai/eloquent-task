<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "name" => "Fine"
        ]);
        Status::create([
            "name" => "Hit"
        ]);
        Status::create([
            "name" => "Broken"
        ]);
        Status::create([
            "name" => "Scratched"
        ]);
    }
}
