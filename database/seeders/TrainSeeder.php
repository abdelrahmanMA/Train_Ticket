<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<1000; $i++){
            DB::table('trains')->insert([
                'tmodel_id' => $i % 255,
                'capacity' => rand(1000, 20000),
                'air_conditioned' => rand(0, 1)
            ]);
        }
    }
}
