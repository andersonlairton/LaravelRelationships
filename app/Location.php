<?php

namespace Relationship;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['latitude','longitude','id'];
    public function country(){
        return $this->belongsTo(Country::class,'id');
    }

}
