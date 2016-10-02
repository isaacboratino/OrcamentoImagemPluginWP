<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcaoModel extends Model
{
    protected $table = 'opcao';
    protected $fillable = [
        'id', 'nome', 'descricao_1', 'descricao_2', 'imagem_url',
        'ordem', 'tags', 'ativo'
    ];
}
