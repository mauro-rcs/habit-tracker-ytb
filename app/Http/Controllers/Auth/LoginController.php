<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    //receber os dados
    public function authenticate(Request $request)
    {
        //dd é dump
        //dd($request->all());
        $credentials = $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        //validando se as credenciais são v/f
        if(Auth::attempt($credentials)){
            //se deu certo, atualiza a sessão
            $request->session()->regenerate();

            //envia pra home
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'email' => "Credenciais Incorretas",
            ]);
        }
    }
}
