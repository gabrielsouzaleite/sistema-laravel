<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfficeFormRequest;
use App\Models\Office;
use App\Repositories\OfficeRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OfficeController extends Controller
{
    public function __construct(private OfficeRepository $repository)
    {
    }
    public function index(Request $request): View
    {
        $offices = Office::query()->orderBy('job_name')->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return View(
            'offices.index',
            compact('offices')
        )->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return View(
            'offices.create'
        );
    }

    public function store(OfficeFormRequest $request): RedirectResponse
    {
        $office = $this->repository->add($request);

        return Redirect::route('offices.index')->with(
            'mensagem.sucesso',
            "Cargo '{$office->job_name}' adicionado com sucesso"
        );
    }

    public function edit(Office $office): View
    {
        return view('offices.edit')->with('office', $office);
    }

    public function update(Office $office, OfficeFormRequest $request): RedirectResponse
    {
        $office->fill($request->all());
        $office->save();

        return Redirect::route('offices.index')->with(
            'mensagem.sucesso',
            "Cargo '{$office->job_name}' atualizado com sucesso"
        );
    }

    public function destroy(Office $office): RedirectResponse
    {
        $office->delete();

        return Redirect::route('offices.index')->with(
            'mensagem.sucesso',
            "Cargo '{$office->job_name}' removido com sucesso"
        );
    }
}
