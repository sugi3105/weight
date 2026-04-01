<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
        'name' => 'テストユーザー',
        'email' => 'test@test.com',
        'password' => bcrypt('password'),
    ]);


        WeightLog::factory()->count(35)->create();


        WeightTarget::factory()->create();
    }
}
