<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrcamentoModel extends Model
{
    protected $table = 'cliente';
    protected $fillable = [
        'id', 'previsao_nascimento', 'nome_bebe', 'email',
        'informacoes_adicionais', 'CEP', 'logradouro', 'numero',
        'complemento', 'bairro', 'municipio', 'uf', 'valor_total'
    ];
}
