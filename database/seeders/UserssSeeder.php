<?php

namespace Database\Seeders;

use App\Models\Userss;
use Illuminate\Database\Seeder;

class UserssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userss::factory()
            ->count(5)
            ->create();
    }
}
