<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;

class SiteEntidadesController extends Controller
{
    public function index()
    {
       return view('consultaInstituicoes');
    }

    public function show($id)
    {
        
        $entidade = Entidade::where('cnpj', $id)->where('ativo','1')->first();
        if(!$entidade){
            $entidade = Entidade::where('nomeFantasma', 'LIKE',"%{$id}%")
            ->where('ativo','1')->get();
        }
        return response()->json($entidade);
        
    }

}
