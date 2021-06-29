<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class ADMMembroController extends Controller
{
    public function index()
    {
        $membros = Membro::orderBy('nome')->get();

        return view('adm.membros.index', compact('membros'));

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $membro = Membro::findOrFail($id);
        return view('adm.membros.show',compact('membro', 'id'));
    }

    public function edit($id)
    {
        $membro= Membro::find($id);
        return view('adm.membros.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {


        Membro::find($id)->update($request->all());
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
