<?php

namespace Relationship\Http\Controllers;

use Illuminate\Http\Request;
use Relationship\Country;
use Relationship\State;

class OnetoManyController extends Controller
{
    public function oneToMany()
    {
        $coutry = Country::where('name','Brasil')->get()->first();
        echo $coutry->name;

        $states = $coutry->states;

        foreach($states as $state){
            echo "<hr>($state->uf) - ($state->name)";//trazendo todos os dados do relacionamento 
        }
    }
    public function insert()
    {
        $dados = [
            'name'=>'Rio de Janeiro',
            'uf'=>'RJ',
            'coutry_id'=>'1'
        ];
        $insertState = State::create($dados);
        var_dump($insertState->name);
        /*
        $coutry = Country::find(1);//recuperando pelo id
        $insertState= $coutry->states()->create($dados);//inserindo daoos com realcionamento hasmany(um para muitos) onde um pais,pode ter varias estados,e um estado pode ter somente um pais
       
        // echo 'chegamos no metodo insert';
    */
    }
}
