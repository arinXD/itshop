<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        // https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWXo-NMM3e6Dz0UDm-1DSwYeEvHS1qB92kTw&s

        $now = Carbon::now();
        $data = [
            [
                'name' => 'วอนเดอร์แดง',
                'cost' => 60,
                'price' => 80,
                'qty' => 13,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWXo-NMM3e6Dz0UDm-1DSwYeEvHS1qB92kTw&s',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWXo-NMM3e6Dz0UDm-1DSwYeEvHS1qB92kTw&s',
                'product_type_id' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'name' => 'Infy',
                'cost' => 600,
                'price' => 990,
                'qty' => 20,
                'image_path' => 'https://kardinalstickvip.com/wp-content/uploads/2022/09/body-color-ruby-red_webp.webp',
                'image_url' => 'https://kardinalstickvip.com/wp-content/uploads/2022/09/body-color-ruby-red_webp.webp',
                'product_type_id' => 2,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ];
        DB::table('products')->insert($data);
    }
}
