<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if (!Auth::attempt($request->only(['login', 'password']))) {
            return redirect()->back()->withErrors(['Usuário ou senha inválidos']);
        }

        return to_route('home.index');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
