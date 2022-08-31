<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class MonstroHasAtaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monstros_has_ataques')->insert([
            'monstro_id' => 1,
            'ataque_id' => 3
        ]);
    }
}
