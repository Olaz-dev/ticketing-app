<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;

class labelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Label::factory()->count(4)->create();
    }
}
