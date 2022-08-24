<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AtaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ataques')->insert([
            'nome' => 'Mordida',
            'acerto' => '9',
            'qtddados' => '2',
            'dado' => 'd6',
        ]);

        DB::table('ataques')->insert([
            'nome' => 'Espada',
            'acerto' => '7',
            'qtddados' => '1',
            'dado' => 'd8',
        ]);

        DB::table('ataques')->insert([
            'nome' => 'Adaga',
            'acerto' => '5',
            'qtddados' => '1',
            'dado' => 'd4',
        ]);

    }
}
