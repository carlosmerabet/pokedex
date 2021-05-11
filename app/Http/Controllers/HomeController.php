<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        #return "Você entrou na home";
    }

    public function index(){

        $json_file = file_get_contents("https://pokeapi.co/api/v2/pokedex/1/");   
        $json_str = json_decode($json_file, true);
        $pokedex = $json_str['pokemon_entries'];

        return view('pokedex' , compact('pokedex'));

    }

    public function show(Request $request){

        $id = $request->id;

        $json_file = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$id."/");   
        $json_str = json_decode($json_file, true);
        $pokemon = $json_str;

        $json_file = file_get_contents("https://pokeapi.co/api/v2/pokemon-form/".$id."/");   
        $json_str = json_decode($json_file, true);

        $pokemon['fotos'] = $json_str['sprites'];

        #echo $pokemon['fotos']['back_default']; exit;
        return view('pokemon' , compact('pokemon'));
    }
}
