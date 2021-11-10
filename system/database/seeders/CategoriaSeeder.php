<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'nome' => 'SUV',
                    'tipo_categoria_id' => 1,
                ],
                [
                    'id' => 2,
                    'nome' => 'Sedã',
                    'tipo_categoria_id' => 1,
                ],
                [
                    'id' => 3,
                    'nome' => 'Hatch',
                    'tipo_categoria_id' => 1,
                ],
                [
                    'id' => 4,
                    'nome' => 'Esportivo',
                    'tipo_categoria_id' => 1,
                ],
                [
                    'id' => 5,
                    'nome' => 'Família',
                    'tipo_categoria_id' => 1,
                ],

            ]
        );
    }
}
