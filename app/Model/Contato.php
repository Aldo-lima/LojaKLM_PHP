<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome_contato',
        'cargo',
        'telefone',
        'tipo_telefone',
        'email',
        'tipo_email',
        'fornecedore_id'
    ];

    public function fornecedor(){
        return $this->belongsTO(Fornecedor::class);
    }

}
