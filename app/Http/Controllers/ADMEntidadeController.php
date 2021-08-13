<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;

class ADMEntidadeController extends Controller
{
    public function index()
    {
        $entidades = Entidade::orderBy('razao_social')->get();

        return view('adm.entidades.index', compact('entidades'));

    }

    public function create()
    {
        return view('adm.entidades.create');
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

        return redirect()->route('entidades')
        ->with('success','Dados alterados com sucesso!');

    }

    public function show($id)
    {
        $entidade = Entidade::find($id);
        return view('adm.entidades.show',compact('entidade'));
    }

    public function edit($id)
    {
        $entidade_id = $id;
        $entidade= Entidade::find($id);
        return view('adm.entidades.edit',compact('entidade','entidade_id'));
    }

    public function update(Request $request, $id)
    {

        $e = Entidade::find($id);
        $e->ativo = $request->input('ativo');
        $e->save();

        return redirect()->route('entidades')
        ->with('success','Dados alterados com sucesso!');

       /*
        $e->situacaoCadastro = $request->input('situacaoCadastro');
        $e->updated_at = now();
        $e->save();

        return redirect()->route('entidades')
                        ->with('success','Dados alterados com sucesso!'); */
    }

    public function destroy($id)
    {
        //
    }
}
