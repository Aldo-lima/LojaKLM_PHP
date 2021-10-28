<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable =['nome'];
    public function fornecedores(){
        return $this->hasMany(Fornecedore::class);
    }
}
