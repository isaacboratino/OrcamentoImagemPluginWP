<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcaoTipoModel extends Model
{
    protected $table = 'opcao_tipo';
    protected $fillable = [
        'id', 'nome', 'ativo', 'opcao_tipo_id'
    ];
}
