<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stats')->insert([
            'forca' => 8,
            'destreza' => 18,
            'constituicao' => 12,
            'inteligencia' => 13,
            'sabedoria' => 10,
            'carisma' => 8,
            'deslocamento' => 9,
            'pontosdevida' => 6,
            'pontosdemana' => 0,
            'defesa' => 14
        ]);
    }
}
