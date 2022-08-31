<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class TamanhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tamanhos')->insert([
            'nome' => 'Minúsculo'
        ]);

        DB::table('tamanhos')->insert([
            'nome' => 'Pequeno'
        ]);

        DB::table('tamanhos')->insert([
            'nome' => 'Médio'
        ]);

        DB::table('tamanhos')->insert([
            'nome' => 'Grande'
        ]);

        DB::table('tamanhos')->insert([
            'nome' => 'Enorme'
        ]);

        DB::table('tamanhos')->insert([
            'nome' => 'Colossal'
        ]);

    }
}
