<?php
namespace App\Http\Controllers;

class SaludaController extends Controller{

    public function execute(){
        $nombre = "Jonathan";
        return view('saluda',["nombre"=>$nombre]);
    }
}