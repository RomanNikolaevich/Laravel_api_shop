<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'status' => '1',
                'name'   => 'Petya',
                'phone'  => '380952223344',
            ],
            [
                'status' => '0',
                'name'   => 'Stasic',
                'phone'  => '380952334455',
            ],
        ]);
    }
}
