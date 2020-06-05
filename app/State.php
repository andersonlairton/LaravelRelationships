<?php

namespace Relationship;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name','uf','coutry_id'];
    public function country()
    {
        return $this->belongsTo(Country::class,'id');//fazendo a relação especificando o campo id da tabela coutry
    }
    public function cities(){
        return $this->hasMany(City::class);
    }
}
