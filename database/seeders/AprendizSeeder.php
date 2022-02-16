<?php

namespace Database\Seeders;

use App\Models\Apprentice;
use Illuminate\Database\Seeder;

class AprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Apprentice::factory(10)->create();
    }
}
