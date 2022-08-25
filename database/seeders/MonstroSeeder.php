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
            'stats' => 2,
            'tamanho' => 1,
            'tipo' => 1

        ]);
    }
}
