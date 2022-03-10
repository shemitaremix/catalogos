<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogo;
use Illuminate\Support\Facades\DB;
use Database\Seeders\File;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= Catalogo::all();
        foreach ($data as $item){
            DB::table('catalogo')->insert([

        
                
                'codigo' => $item['codigo'],
                'asentamiento' => $item['asentamiento'],
                'tipo_asenta' => $item['tipo_asenta'],
                'municipio' => $item['municipio'],
                'estado' => $item['estado'],
                'ciudad' => $item['ciudad'],
        
        ]);
  }
        
        
        
          
        
}
}
