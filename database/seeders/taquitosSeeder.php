<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\taquitos;
use Illuminate\Support\Facades\DB;


class taquitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tacosSabor = ["tripa","suadero","pastorcito"];
        $tiposalsa = ["verde","roja"];
        $tipocarne =["res","puerco","pollo"];
        $tipotortilla = ["harina","maiz"];
        
       
        for( $i = 0;$i<50;$i++) {
            DB::table('taquitos')->insert([
                'sabor' => $tacosSabor[rand (0,2)],
                't_salsa' => $tiposalsa[rand(0,1)],
                't_carne' => $tipocarne [rand(0,2)],
                't_tortilla' => $tipotortilla[rand(0,1)]
            ]);
        }
    }
}
