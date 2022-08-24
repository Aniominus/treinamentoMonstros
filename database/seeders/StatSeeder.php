<?php

namespace Database\Seeders;

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
            'forca' => '18',
            'destreza' => '9',
            'constituicao' => '16',
            'inteligencia' => '',
            'sabedoria' => '12',
            'carisma' => '6',
            'deslocamento' => '12',
            'pontosdevida' => '20',
            'pontosdemana' => '2',
            'defesa' => '16'
        ]);

        DB::table('stats')->insert([
            'forca' => '8',
            'destreza' => '17',
            'constituicao' => '13',
            'inteligencia' => '14',
            'sabedoria' => '12',
            'carisma' => '10',
            'deslocamento' => '9',
            'pontosdevida' => '5',
            'pontosdemana' => '0',
            'defesa' => '14'
        ]);

        DB::table('stats')->insert([
            'forca' => '20',
            'destreza' => '14',
            'constituicao' => '18',
            'inteligencia' => '13',
            'sabedoria' => '17',
            'carisma' => '4',
            'deslocamento' => '15',
            'pontosdevida' => '40',
            'pontosdemana' => '4',
            'defesa' => '18'
        ]);



    }
}
