<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' =>"mohamedashrafelbayoumi@gmail.com",
            'email' => "mohamedashrafelbayoumi@gmail.com",
            'password' => Hash::make('mohamedashrafelbayoumi@gmail.com'),
        ]);
    }
}
