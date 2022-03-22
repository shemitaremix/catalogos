<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeder\Grupo;
use Database\Seeders\taquitosSeeder; 
use Database\Seeders\refrescosSeeder; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(refrescosSeeder::class);
    }
}
