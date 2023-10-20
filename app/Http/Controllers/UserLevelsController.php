<?php

namespace App\Http\Controllers;

use App\Models\UserLevel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserLevelsController extends Controller
{
    public function index(Request $request): View
    {
        $allLevels = UserLevel::query()->orderBy('level_name')->get();

        return View(
            'users/levels.index',
            compact('allLevels')
        );
    }

    public function create(): View
    {
        return View(
            'users/levels.create'
        );
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        UserLevel::create($data);

        return Redirect::route('levels.index');
    }

    public function edit(UserLevel $level): View
    {
        return view(
            'users/levels.edit'
        )->with('level', $level);
    }

    public function destroy(UserLevel $level): RedirectResponse
    {
        $level->delete();

        return Redirect::route('levels.index')->with(
            'mensagem.sucesso',
            "Nível '{$level->level_name}' foi removido com sucesso"
        );
    }
}
