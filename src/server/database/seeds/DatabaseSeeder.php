<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(OpcaoTipoSeeder::class);
        //$this->call(OpcaoSeeder::class);
        $this->call(OutrosSeeder::class);
    }
}
