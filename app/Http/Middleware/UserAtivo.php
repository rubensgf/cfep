<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class UserAtivo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    

        //$user = User::where('id', Auth::user()->id)->select('ativo')->first();
        $membro = User::join('user_dados', 'users.id', 'user_dados.user_id')
        ->select('users.email', 'users.ativo', 'user_dados.*')
        ->where('users.id', Auth::user()->id)
        ->first();
 
        if ( $membro->ativo != '1' ) {
            
            return redirect('/usr/aviso');
        }


        return $next($request);
    }
}
