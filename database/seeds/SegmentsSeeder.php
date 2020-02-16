<?php

use App\Segment;
use Illuminate\Database\Seeder;

class SegmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Segment::create([
            "name" => "New"
        ]);
        Segment::create([
            "name" => "Expensive"
        ]);
        Segment::create([
            "name" => "Cheap"
        ]);
        Segment::create([
            "name" => "Popular"
        ]);
    }
}
