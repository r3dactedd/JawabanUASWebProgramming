<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 2,
            'item_id' => 1
        ]);

        Order::create([
            'user_id' => 2,
            'item_id' => 3
        ]);

        Order::create([
            'user_id' => 4,
            'item_id' => 3
        ]);

        Order::create([
            'user_id' => 4,
            'item_id' => 5
        ]);
    }
}
