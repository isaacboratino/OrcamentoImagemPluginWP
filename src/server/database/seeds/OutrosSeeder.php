<?php

use Illuminate\Database\Seeder;

class OutrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Arte caixa pano */
        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_8d4dc42d027543fca4ddffd6432cee9c.jpg/v1/fill/w_649,h_431,al_c,q_90,usm_0.66_1.00_0.01/808b8f_8d4dc42d027543fca4ddffd6432cee9c.jpg',
            'ordem' => 1,
            'opcao_tipo_id' => 4
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_b448057c9a744f29bc8ae05237dfba27.jpg/v1/fill/w_648,h_431,al_c,q_90,usm_0.66_1.00_0.01/808b8f_b448057c9a744f29bc8ae05237dfba27.jpg',
            'ordem' => 2,
            'opcao_tipo_id' => 4
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_7710fd07a9c648ca9781af7456420220.jpg/v1/fill/w_620,h_413,al_c,q_90,usm_0.66_1.00_0.01/808b8f_7710fd07a9c648ca9781af7456420220.jpg',
            'ordem' => 3,
            'opcao_tipo_id' => 4
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_77b7d3ad842645c5a0803782b2b1fabb.jpg/v1/fill/w_620,h_413,al_c,q_90,usm_0.66_1.00_0.01/808b8f_77b7d3ad842645c5a0803782b2b1fabb.jpg',
            'ordem' => 4,
            'opcao_tipo_id' => 4
        ]);
    }
}
