<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class CatalogoController extends Controller
{
    public function create(Request $request){
        $catalogo = new Catalogo();
        $catalogo->description = $request->description;
        $catalogo->save();
        return view('resultado',["catalogo"=>$catalogo]);
    }
}
