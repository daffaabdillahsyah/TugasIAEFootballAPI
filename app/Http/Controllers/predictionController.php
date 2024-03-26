<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class predictionController extends Controller
{
    public function prediction ($id){
        $predict = Http::get("https://apiv3.apifootball.com/?action=get_predictions&from=2023-04-05&to=2023-04-05&APIkey=35b7e527a611e1671f5ae61b8b57b9bd0c216e68e7b5677af7ac4b531952bf83&country_id=".$id);
        $ConverterJson = $predict->json();

        return view("predict",["ConverterJson" => $ConverterJson]);
}}
