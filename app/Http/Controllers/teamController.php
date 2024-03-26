<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class teamController extends Controller
{
    public function team ($id){
        dd ($id);
        $teamlist = Http::get("https://apiv3.apifootball.com/?action=get_teams&league_id=302&APIkey=35b7e527a611e1671f5ae61b8b57b9bd0c216e68e7b5677af7ac4b531952bf83&team_country=$id");
        $ConverterJson = $teamlist->json();

        return view("team",["ConverterJson" => $ConverterJson]);
    } 
}
