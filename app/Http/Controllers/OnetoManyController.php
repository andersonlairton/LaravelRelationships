<?php

namespace Relationship\Http\Controllers;

use Illuminate\Http\Request;
use Relationship\Country;

class OnetoManyController extends Controller
{
    public function oneToMany()
    {
        $coutry = Country::where('name','Brasil')->get()->first();
        
    }
}
