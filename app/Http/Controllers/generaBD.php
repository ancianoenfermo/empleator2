<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;


class generaBD extends Controller
{
    public function genera() {
        if(!file_exists(public_path("collection.json"))) {
            #si no existe
            echo "existe";
        }
        echo "hola";

        $jsonString = file_get_contents(public_path('collection.json'));
        $data = json_decode($jsonString, true);
        Oferta::truncate();
        /*
        foreach ($data as $dato) {
            Oferta::create(['id'=>1,'title' => $dato['title']]);
        }
        */
        $ofertas = Oferta::all();
        dd($ofertas);

    }
}
