<?php

namespace Database\Seeders;

use App\Models\books;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        books::factory()->count(50)->create();
    }
}