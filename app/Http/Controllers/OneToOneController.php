<?php

namespace Relationship\Http\Controllers;

use Illuminate\Http\Request;
use Relationship\Country;
use Relationship\Location;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        //$country = Country::find(1); //buscandoo o pais pelo id
        $country = Country::where('name', 'China')->get()->first(); //outra maneira de se pesquisar
        echo $country->name;
        //$location = $country->location;//chamando a função como atributo
        $location = $country->location()->get();
        // var_dump($location);
        echo "<hr>Latitude:{$location[0]['latitude']}<br>"; //nao sei ao certo,mas retornou os dados em um array de uma unica posição
        echo "Longitude:{$location[0]['longitude']}";
    }
    public function inverse()
    {
        $latitude = 123;
        $longitude = 321;
        $location = Location::where("latitude", $latitude)
            ->where("longitude", $longitude)
            ->get()
            ->first();
        $country = $location->country;
        echo $country->name;
    }
}
