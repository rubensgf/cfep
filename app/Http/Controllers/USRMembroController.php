<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class USRMembroController extends Controller
{
    public function index() {
        $user_id = Auth::id();

        $dados = DB::table('membros')
        ->where('membros.user_id', '=', $user_id)
        ->first();


        return view('user.membro.show', compact('dados'));

    }

    public function edit($id)
    {
        $membro= Membro::find($id);
        return view('adm.membro.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {

        Membro::find($id)->update($request->all());
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }


}
