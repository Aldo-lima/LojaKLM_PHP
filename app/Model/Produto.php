<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =[
        'produto',
        'descricao',
        'unidade_medida',
        'quantidade_embalagem',
        'preco',
        'fornecedore_id'
     ];

     public function fornecedore(){
        return $this->belongsTo(Fornecedore::class);
    }
}
