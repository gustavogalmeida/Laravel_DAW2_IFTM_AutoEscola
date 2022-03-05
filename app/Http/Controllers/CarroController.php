<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro; // AQUI ELE ESTA VINCULANDO COM MINHA MODEL

class CarroController extends Controller // AQUI FICA AS CLASSES DO MEU CONTROLLER
{
    public function index (){
        $carro = new Carro ();
        $carros = Carro::all();
        // caminho Projeto/resources/views/autoescola/index.blade.php
        return view ("autoescola.index",[ 
            "carro"=> $carro,
            "carros"=> $carros
        ]);
    }
    public function salvar (request $request){
        if ($request->get("id") == ""){
            $carro = new Carro ();
        } else {
            $carro = Carro::Find($request->get("id"));
        }
        $carro -> marca = $request -> get("marca");
        $carro -> modelo = $request -> get("modelo");
        $carro -> placa = $request -> get("placa");
        $carro -> cor = $request -> get("cor");
        $carro -> ano = $request -> get ("ano");
        $carro -> save();
        return redirect ("/autoescola");
    }
    public function excluir($id){
        Carro::Destroy($id);
        return redirect ("/autoescola");
    }
    public function editar($id){
        $carro = Carro::Find($id);
        $carros = Carro::All();
        return view ("autoescola.index",[
            "carro"=> $carro,
            "carros"=> $carros
        ]);
    }
}
