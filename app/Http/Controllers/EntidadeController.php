<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;

class EntidadeController extends Controller
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
        $entidade= Entidade::find($id);
        return view('adm.entidades.edit',compact('entidade'));
    }

    public function update(Request $request, $id)
    {

        Entidade::find($id)->update($request->all());
        return redirect()->route('entidades')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
