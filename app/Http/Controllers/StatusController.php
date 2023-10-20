<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusFromRequest;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class StatusController extends Controller
{
    public function index(Request $request): View
    {
        $allStatus = Status::query()->orderBy('status_name')->get();

        return View(
            'users/status.index',
            compact('allStatus')
        );
    }

    public function create(): View
    {
        return View(
            'users/status.create'
        );
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        $status = Status::create($data);

        return Redirect::route('status.index');
    }


    public function edit(Status $status): View
    {
        return view(
            'users/status.edit'
        )->with('status', $status);
    }


    public function update(Status $status, StatusFromRequest $request): RedirectResponse
    {
        $status->fill($request->all());
        $status->save();

        return Redirect::route('status.index')->with(
            'mensagem.sucesso',
            "O status '{$status->status_name}' foi atualizado com sucesso"
        )
        ;
    }

    public function destroy(Status $status): RedirectResponse
    {
        $status->delete();

        return Redirect::route('status.index')->with(
            'mensagem.sucesso',
            "Status '{$status->status_name}' foi removido com sucesso"
        );
    }
}
