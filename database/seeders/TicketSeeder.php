<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<720000; $i++){
            $divided = intdiv($i, 5000);
            DB::table('tickets')->insert([
                'date' => date("Y-m-d H:i:s", time() + ( $divided * 86400)),
                'from' => sprintf("place_%d", $divided),
                'to' => sprintf("place_%d", $divided + 1),
                'user_id' => $i % 1000 + 1,
                'train_id' => $i % 1000 + 1,
            ]);
        }
    }
}
