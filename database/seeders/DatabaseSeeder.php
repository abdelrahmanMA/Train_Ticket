<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Ticket::truncate();
        \App\Models\Train::truncate();
        \App\Models\Tmodel::truncate();
        \App\Models\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Models\User::factory(3000)->create();
        \App\Models\Tmodel::factory(20)->create();
        \App\Models\Train::factory(1000)->create();
        \App\Models\Ticket::factory(720000)->create();
    }
}
