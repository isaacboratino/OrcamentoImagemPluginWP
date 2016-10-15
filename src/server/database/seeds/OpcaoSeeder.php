<?php

use Illuminate\Database\Seeder;

class OpcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Charutinho */
        App\OpcaoModel::create([
            'nome' => 'Charutinho de Waffle Banhado no Chocolate', 
            'descricao_1' => 'Trata-se de um waffle crocante do interior, banhado no chocolate meio amargo. É tão gostoso quanto os outros, porém, mais barato devido ao processo de fabricação. O chocolate meio amargo "quebra" o doce do waffle, dando uma combinação perfeita de sabor e crocância.', 
            'descricao_2' => 'Valor só do charutinho, sem caixa <strong>R$ 2,99</strong> <br />Valor do charutinho extra para reposição do pedido com a caixa <strong style="color:red;">R$ 2,69*</strong> ', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_9bc397da3f694c21abbf6a842d3d9f6c.jpg/v1/fill/w_292,h_158,al_c,q_80,usm_0.66_1.00_0.01/808b8f_9bc397da3f694c21abbf6a842d3d9f6c.jpg',
            'ordem' => 1,
            'opcao_tipo_id' => 1 // charuto
        ]);

        App\OpcaoModel::create([
            'nome' => 'Charutinho Maciço de Chocolate Nestlé ao Leite', 
            'descricao_1' => 'O chocolate Nestlé ao Leite é o top da Nestlé. É considerado o melhor chocolate Nacional. Não confunda com o Nestlé Blend ou Plus, de qualidades inferiores.', 
            'descricao_2' => 'Valor só do charutinho, sem caixa <strong>R$ 4,20</strong> <br />Valor do charutinho extra para reposição do pedido com a caixa <strong>R$ 4,20</strong>', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_06bfed49d04f48028c193c619047cc59.jpg/v1/fill/w_292,h_158,al_c,q_80,usm_0.66_1.00_0.01/808b8f_06bfed49d04f48028c193c619047cc59.jpg',
            'ordem' => 2,
            'opcao_tipo_id' => 1 // charuto
        ]);

        App\OpcaoModel::create([
            'nome' => 'Charutinho Maciço de Chocolate Belga', 
            'descricao_1' => 'O chocolate Belga original Callebaut é mais fino e simplesmente delicioso. (atenção, não confunda o chocolate <strong>Belga Callebaut</strong> com o chocolate <strong>Barry</strong> Callebaut de fabricação nacional, com preço e qualidade bem inferiores). O chocolate original Callebaut traz a leveza e o sabor de um dos melhores chocolates do mundo.', 
            'descricao_2' => 'Valor só do charutinho, sem caixa <strong>R$ 4,99</strong> <br />Valor do charutinho extra para reposição do pedido com a caixa <strong style="color:red;">R$ 4,59*</strong>', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_ef3218df65404369b1df8fac66af0900.jpg/v1/fill/w_292,h_158,al_c,q_80,usm_0.66_1.00_0.01/808b8f_ef3218df65404369b1df8fac66af0900.jpg',
            'ordem' => 3,
            'opcao_tipo_id' => 1 // charuto
        ]);

        App\OpcaoModel::create([
            'nome' => 'Charutinho Maciço de Chocolate Belga com Gianduia', 
            'descricao_1' => 'É o chocolate Belga Callebaut com Gianduia. Sabor indescritível para paladares apurados. Fino, o sabor da avelã permanece aguçando o sentido e trazendo à memória o quão precioso é e sempre será esta data tão especial na vida da família.', 
            'descricao_2' => 'Valor unitário <strong>R$ 7,99 (Pedido mínimo do Belga com Gianduia 60 unidades)</strong>', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_ef3218df65404369b1df8fac66af0900.jpg/v1/fill/w_292,h_158,al_c,q_80,usm_0.66_1.00_0.01/808b8f_ef3218df65404369b1df8fac66af0900.jpg',
            'ordem' => 4,
            'opcao_tipo_id' => 1 // charuto
        ]);


        /* Caixa */
        App\OpcaoModel::create([
            'nome' => 'Caixa MDF \'Divertida\' ', 
            'descricao_1' => 'A Caixa MDF Divertida possui tampa removível com passa fita combinando com o tema escolhido e arte na parte externa da tampa. A arte pode ser escolhida mais abaixo. É legal utilizar uma arte que combine com a decoração do quarto, pois depois a caixa pode ser usada como um porta-treco no quarto o bebê)
Os preços praticados abaixo contemplam a quantidade de charutos descrita + rótulo padrão + caixa MDF Divertida personalizada (com a arte à sua escolha).', 
            'descricao_2' => '<strong>Caixa Divertida com Charutos</strong><ul>	<li>Caixa Divertida com 40 charutos Waffles = R$ 159,50 (Charutinho Waffle extra para reposição = R$ 2,69*)</li><li>Caixa Divertida com 40 charutos Nestlé Ao Leite = R$ 207,90 (Charutinho Nestlé extra para resposição = R$ 4,20)</li><li>Caixa Divertida com 40 charutos Belga = R$ 239,50 (Charutinho Belga extra para reposição = R$ 4,59*)</li><li>Caixa Divertida com 60 charutos Belga com Gianduia = R$ 519,30 (Charutinho Belga Gianduia avulso = R$ 7,99)</li></ul>', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_6213f25f28154fcaac0ac92828ce2517.jpg/v1/fill/w_411,h_180,al_c,q_80,usm_0.66_1.00_0.01/808b8f_6213f25f28154fcaac0ac92828ce2517.jpg',
            'subopcao' => '2a',
            'ordem' => 1,
            'opcao_tipo_id' => 2 // caixa
        ]);

        App\OpcaoModel::create([
            'nome' => 'Caixa MDF \'Clássica\'', 
            'descricao_1' => 'A Caixa MDF Clássica possui tampa com dobradiça e arte dos dois lados da tampa. A arte pode ser escolhida mais abaixo. É legal utilizar uma arte que combine com a decoração do quarto, pois depois a caixa pode ser usada como um porta-treco no quarto o bebê)
Os preços praticados abaixo contemplam a quantidade de charutos descrita + rótulo padrão + caixa MDF Clássica personalizada (com a arte à sua escolha).', 
            'descricao_2' => 'Caixa Clássica com CharutosCaixa Clássica com 40 charutos Waffles = R$ 169,50 (Charutinho Waffle extra para reposição = R$ 2,69*)Caixa Clássica com 40 charutos Nestlé Ao Leite = R$ 217,90 (Charutinho Nestlé extra para resposição = R$ 4,20)Caixa Clássica com 40 charutos elga = R$ 249,50 (Charutinho Belga extra para reposição = R$ 4,59*)Caixa Clássica com 60 charutos Belga com Gianduia = R$ 529,30 (Charutinho Belga Gianduia avulso = R$ 7,99)', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_8aad6b8222804b8499deac40e0983336~mv2_d_2064_1372_s_2.jpg/v1/fill/w_411,h_180,al_c,q_80,usm_0.66_1.00_0.01/808b8f_8aad6b8222804b8499deac40e0983336~mv2_d_2064_1372_s_2.jpg',
            'subopcao' => '2b',
            'ordem' => 2,
            'opcao_tipo_id' => 2 // caixa
        ]);

        App\OpcaoModel::create([
            'nome' => 'Caixa em Cartonagem forrada com Tecido', 
            'descricao_1' => 'A Caixa em Cartonagem forrada com tecido é feita no modelo "tampa livro" ou "francesa" cuja tampa é presa em uma das laterais. Charmosa, possui fita para amarrar a tampa. Temos algumas opções de tecidos disponíveis, favor consultar. Também podemos buscar um tecido novo no mercado ou ainda a mamãe pode nos enviar o mesmo tecido que está utilizando na decoração.Os preços praticados abaixo contemplam a quantidade de charutos descrita + rótulo padrão + caixa em cartonagem forrada com tecido personalizada (com nome na frente da caixa).', 
            'descricao_2' => 'Caixa em Cartonagem forrada com Tecido Caixa com Tecido com 40 charutos Waffles = R$ 179,50 (Charutinho Waffle extra para reposição = R$ 2,69*) Caixa com Tecido com 40 charutos Nestlé Ao Leite = R$ 227,90 (Charutinho Nestlé extra para resposição = R$ 4,20) Caixa com Tecido com 40 charutos Belga = R$ 259,50 (Charutinho Belga extra para reposição = R$ 4,59*) Caixa com Tecido com 60 charutos Belga com Gianduia = R$ 539,30 (Charutinho Belga Gianduia avulso = R$ 7,99)', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_37b3325eb0ff4324ba786b1a480e8aae.jpg/v1/fill/w_411,h_180,al_c,q_80,usm_0.66_1.00_0.01/808b8f_37b3325eb0ff4324ba786b1a480e8aae.jpg',
            'subopcao' => '2c',
            'ordem' => 3,
            'opcao_tipo_id' => 2 // caixa
        ]);

        App\OpcaoModel::create([            
            'nome' => 'Não vou querer caixa', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'http://www.free-icons-download.net/images/prohibited-symbols-35844.png',
            'subopcao' => '2d',
            'ordem' => 4,
            'opcao_tipo_id' => 2 // caixa
        ]);

        /* Arte caixa */
        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_35f8cb5e9a373d0f5a0beef70d7041b1.jpg/v1/fill/w_132,h_123,al_c,q_80,usm_0.66_1.00_0.01/808b8f_35f8cb5e9a373d0f5a0beef70d7041b1.jpg',
            'ordem' => 1,
            'opcao_tipo_id' => 3
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_2e33cd5839524087a2fd30564c0717f8.jpg/v1/fill/w_132,h_123,al_c,q_80,usm_0.66_1.00_0.01/808b8f_2e33cd5839524087a2fd30564c0717f8.jpg',
            'ordem' => 2,
            'opcao_tipo_id' => 3
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_2daf69959e074cf198c9a2c5078f7c41.jpg/v1/fill/w_132,h_123,al_c,q_80,usm_0.66_1.00_0.01/808b8f_2daf69959e074cf198c9a2c5078f7c41.jpg',
            'ordem' => 3,
            'opcao_tipo_id' => 3 
        ]);

        App\OpcaoModel::create([
            'nome' => '', 
            'descricao_1' => '', 
            'descricao_2' => '', 
            'imagem_url' => 'https://static.wixstatic.com/media/808b8f_3eb6ee7ebda510d47c34d76cc9d876b6.jpg/v1/fill/w_132,h_123,al_c,q_80,usm_0.66_1.00_0.01/808b8f_3eb6ee7ebda510d47c34d76cc9d876b6.jpg',
            'ordem' => 4,
            'opcao_tipo_id' => 3
        ]);


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
