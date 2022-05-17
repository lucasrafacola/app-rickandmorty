<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'E-mail obrigatório',
            'password.required' => 'Senha obrigatória'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return to_route('dash.index');
        } else {
            return redirect()->back()->with('fail', 'E-mail ou senha inválida');
        }
    }
}
