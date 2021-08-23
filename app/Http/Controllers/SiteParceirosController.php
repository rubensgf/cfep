<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;

class SiteParceirosController extends Controller
{
    public function index()
    {
       return view('parceiros');
    }

    public function store(Request $request)
    {
        
        $ud = new Entidade([
            'razao_social'  =>  $request->input('razao_social'),
            'nome_fantasia'  => $request->input('nome_fantasia'),
            'site'  => $request->input('site'),
            'cnpj' =>  $request->input('cnpj'),
            'endereco' => $request->input('endereco'),
            'numero' => $request->input('numero'),
            'cidade' => $request->input('cidade'),
            'uf' => $request->input('uf'),
            'cep' => $request->input('cep'),
            'nome'  => $request->input('nome'),
            'email'  => $request->input('email'),
            'nome' => $request->input('nome'),
            'rg' => $request->input('rg'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'celular' => $request->input('celular'),
            'sexo' => $request->input('sexo'),
        ]);
        $ud->save();

        return redirect()->route('seja-um-parceiro')
        ->with('success','Dados alterados com sucesso!');
    }

}
