<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login.index');
    }

    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        if (!Auth::attempt($request->only(['login', 'password']))) {
            return redirect()->back()->withErrors(['Usuário ou senha inválidos']);
        }

        return Redirect::route('home.index');
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
