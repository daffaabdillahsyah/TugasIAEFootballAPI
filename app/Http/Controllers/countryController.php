<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class countryController extends Controller
{
    public function country (){
        $countryname = Http::get("https://apiv3.apifootball.com/?action=get_countries&APIkey=35b7e527a611e1671f5ae61b8b57b9bd0c216e68e7b5677af7ac4b531952bf83");
        $ConverterJson = $countryname->json();

        return view("country",["ConverterJson" => $ConverterJson]);
    } 
    
}
