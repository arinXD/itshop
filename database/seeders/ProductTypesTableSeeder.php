<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        $data = [
            ['name' => 'ไม่ระบุ', "created_at" => $now, "updated_at" => $now],
            ['name' => 'เครื่องดื่ม', "created_at" => $now, "updated_at" => $now],
            ['name' => 'อาหารว่างรองท้อง', "created_at" => $now, "updated_at" => $now],
            ['name' => 'อาหารพร้อมทาน', "created_at" => $now, "updated_at" => $now],
            ['name' => 'เบเกอร์รี่', "created_at" => $now, "updated_at" => $now],
            ['name' => 'นมโยเกิร์ต', "created_at" => $now, "updated_at" => $now],
            ['name' => 'ไอศกรีม', "created_at" => $now, "updated_at" => $now],
            ['name' => 'ขนมและลูกอม', "created_at" => $now, "updated_at" => $now],
            ['name' => 'อาหารแห้ง', "created_at" => $now, "updated_at" => $now],
            ['name' => 'ของใช้ในครัวเรือน', "created_at" => $now, "updated_at" => $now]
        ];
        DB::table('product_types')->insert($data);
    }
}
