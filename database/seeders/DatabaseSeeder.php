<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'AR',
            'email' => 'ar@k.com',
            'password' => Hash::make("1"),
        ]);

        //customer
        DB::table('users')->insert([
            'name' => 'customer 1',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('1'),
            'user_type' => 0
        ]);
        //Empoyee
        DB::table('users')->insert([
            'name' => 'Employee 1',
            'email' => 'emp1@gmail.com',
            'password' => Hash::make('1'),
            'user_type' => 1
        ]);
        //Admin
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1'),
            'user_type' => 0
        ]);

        $this->call([
            ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
