<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    protected $fillable = [
        'nome', 'endereco', 'sexo', 'qualificacao', 'cpf',
    ];
}
