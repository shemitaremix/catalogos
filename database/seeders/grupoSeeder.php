<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0;$i<50;$i++){
            $grupo = new Grupo();
            $grupo -> nombre = $faker->name;
            $grupo -> descripcion = $faker->text;
            $grupo -> codigo = $faker->randomNumber(5);
            $grupo->save();


        }
    }
}
