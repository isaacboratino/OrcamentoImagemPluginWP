<?php

use Illuminate\Database\Seeder;

class OpcaoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OpcaoTipoModel::create([
            'id' => 1,
            'nome' => 'Charuto',
        ]);

        App\OpcaoTipoModel::create([
            'id' => 2,
            'nome' => 'Tipo de Caixa',
        ]);

        App\OpcaoTipoModel::create([
            'id' => 3,
            'nome' => 'Arte da Caixa',
        ]);

        App\OpcaoTipoModel::create([
            'id' => 4,
            'nome' => 'Tipo de Tecido da Caixa',
        ]);

        App\OpcaoTipoModel::create([
            'id' => 5,
            'nome' => 'Tipo de Rótulo',
        ]);

        App\OpcaoTipoModel::create([
            'id' => 6,
            'nome' => 'Arte do Rótulo',
        ]);
    }
}
