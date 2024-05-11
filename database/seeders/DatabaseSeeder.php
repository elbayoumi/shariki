<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\CouponCode;
use App\Models\FixedQuestions;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin::factory(1)->create();
        // User::factory(10)->create();
        // CouponCode::factory(250)->create();
        // $this->call(AdminSeeder::class);
        $this->call([FixedQuestionSeeder::class,AdminSeeder::class]);
        }
}
