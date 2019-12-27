<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

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
        ]);
        Order::create([
            'user_id' => 2,
        ]);
        Order::create([
            'user_id' => 3,
        ]);
        Order::create([
            'user_id' => 3,
        ]);
    }
}
