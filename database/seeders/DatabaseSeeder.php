<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(array(
            TipoSeeder::class,
            AtaqueSeeder::class,
            StatSeeder::class,
            TamanhoSeeder::class,
            MonstroSeeder::class,
            MonstroHasAtaqueSeeder::class
        ));
    }
}
