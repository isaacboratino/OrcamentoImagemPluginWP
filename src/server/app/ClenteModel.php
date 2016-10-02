<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClenteModel extends Model
{   
    protected $table = 'cliente';
    protected $fillable = [
        'id', 'nome', 'email', 'celular', 'data_cadastro'
    ];
}
