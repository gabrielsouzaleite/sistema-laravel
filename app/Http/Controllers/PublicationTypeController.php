<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationTypeFormRequest;
use App\Models\PublicationType;
use App\Repositories\PublicationTypeRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PublicationTypeController extends Controller
{
    public function __construct(private PublicationTypeRepository $repository)
    {
    }

    public function index(Request $request): View
    {
        $publicationTypes = PublicationType::query()->orderBy('type')->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return View('publication-types.index', compact('publicationTypes'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return View(
            'publication-types.create'
        );
    }

    public function store(PublicationTypeFormRequest $request): RedirectResponse
    {
        $publicationType = $this->repository->add($request);

        return Redirect::route('publication-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$publicationType->type}' adicionado com sucesso"
        );
    }

    public function edit(PublicationType $publicationType): View
    {
        return view('publication-types.edit')->with('publicationType', $publicationType);
    }

    public function update(PublicationType $publicationType, PublicationTypeFormRequest $request): RedirectResponse
    {
        $publicationType->fill($request->all());
        $publicationType->save();

        return Redirect::route('publication-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$publicationType->type}' atualizado com sucesso"
        )
        ;
    }

    public function destroy(PublicationType $publicationType): RedirectResponse
    {
        $publicationType->delete();

        return Redirect::route('publication-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$publicationType->type}' removido com sucesso"
        );
    }
}
