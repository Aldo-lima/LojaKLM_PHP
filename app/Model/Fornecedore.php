<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fornecedore extends Model
{
    protected $fillable =['nome', 'nome_r', 'cnpj', 'inscri_esta' ];
}
