<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\Categoria::factory(30)->create();
          /**$datos =[
        [
            'categoria' => 'Alimentación'
        ],
        [
            'categoria' => 'Salud'
        ],
        [
            'categoria' => 'Vida personal'
        ],
        [
            'categoria' => 'Autocuidado'
        ],
        [
            'categoria' => 'Belleza'
        ],
        [
            'categoria' => 'Limpieza'
        ],
        [
            'categoria' => 'Hogar'
        ],
        [
            'categoria' => 'Maquillaje'
        ],
        [
            'categoria' => 'Remedios'
        ],
        [
            'categoria' => 'Nuutrición'
        ],
        [
            'categoria' => 'Naturaleza'
        ]];
        DB::table('categorias')->insert($datos); */
    }
}
