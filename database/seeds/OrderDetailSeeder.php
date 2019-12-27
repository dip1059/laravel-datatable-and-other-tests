<?php

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
            'order_id' => 1
        ]);
        OrderDetail::create([
            'order_id' => 1
        ]);
        OrderDetail::create([
            'order_id' => 2
        ]);
        OrderDetail::create([
            'order_id' => 2
        ]);
        OrderDetail::create([
            'order_id' => 3
        ]);
        OrderDetail::create([
            'order_id' => 3
        ]);
    }
}
