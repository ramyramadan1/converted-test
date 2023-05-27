<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create(['is_admin'=>1]);
        \App\Models\User::factory(1000)->create(['is_admin'=>0]);
    }
}
