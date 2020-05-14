<?php

namespace Relationship;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //fazendo metodo que tras o relacionamento one-to-one
    public function location()
    {
        return $this->hasMany(Location::class,'coutry_id');//retorna o relacionamento um pra um,especificando o campo
    }
}
