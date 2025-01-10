<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $orders = [];

        for ($i = 1; $i <= 50; $i++) {
            $product_id = rand(1, 25);

            $order_date = Carbon::now()->subDays(rand(0, 30));

            $quantity = rand(1, 5);

            $product = DB::table('products')->where('id', $product_id)->first();

            if ($product) {
                $total_price = $product->price * $quantity;

                $orders[] = [
                    'product_id' => $product_id,
                    'order_date' => $order_date,
                    'quantity' => $quantity,
                    'total_price' => $total_price,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            } else {
                $i--;
            }
        }

        DB::table('orders')->insert($orders);
    }
}
