<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;

class ADMEntidadeController extends Controller
{
    public function index()
    {
        $entidades = Entidade::orderBy('razaosocial')->get();

        return view('adm.entidades.index', compact('entidades'));

    }

    public function create()
    {
        return view('adm.entidades.create');
    }

    public function store(Request $request)
    {
        //
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
        $e->situacaoCadastro = $request->input('situacaoCadastro');
        $e->save();

        dd($e);

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
