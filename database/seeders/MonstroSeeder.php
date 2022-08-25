<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class MonstroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monstros')->insert([
            'nome' => 'Goblin',
            'desafio' => 0.25,
            'stats_id' => 2,
            'tamanho_id' => 1,
            'tipo_id' => 1

        ]);
    }
}
