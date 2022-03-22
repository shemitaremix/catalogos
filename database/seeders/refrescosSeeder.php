<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Refresco;
use Illuminate\Support\Facades\DB;


class refrescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saborchesco = ["lulu","manzanita","coca"];
        $distribuidorachesco = ["cocacola","pepsi"];
        $tamañochesco = ["600","1000","500"];

        for($i=0;$i<50;$i++) {
            DB::table('refrescos') ->insert([
                'sabor' => $saborchesco[rand(0,2)],
                'distribuidora' => $distribuidorachesco[rand(0,1)],
                'tamaño' => $tamañochesco[rand(0,2)]
            ]);
        }
    }
}
