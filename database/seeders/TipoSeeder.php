<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'nome' => 'Humanoide'
        ]);

        DB::table('tipos')->insert([
            'nome' => 'Monstro'
        ]);

        DB::table('tipos')->insert([
            'nome' => 'Morto-Vivo'
        ]);

        DB::table('tipos')->insert([
            'nome' => 'Animal'
        ]);

    }
}
