<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrcamentoOpcoesModel extends Model
{
    protected $table = 'orcamento_opcoes';
    protected $fillable = [
        'id', 'quantidade', 'valor', 'observacao'
    ];
}
