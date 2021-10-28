<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function contatos(){
        return $this->belongsTO(Contato::class);
    }

}
