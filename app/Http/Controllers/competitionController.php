<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class competitionController extends Controller
{
    public function competition ($id){
        $comp = Http::get("https://apiv3.apifootball.com/?action=get_leagues&country_id=6&APIkey=35b7e527a611e1671f5ae61b8b57b9bd0c216e68e7b5677af7ac4b531952bf83&country_id=".$id);
        $ConverterJson = $comp->json();

        return view("comp",["ConverterJson" => $ConverterJson]);
}}
