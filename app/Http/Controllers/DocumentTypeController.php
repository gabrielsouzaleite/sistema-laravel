<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentTypeFormRequest;
use App\Models\DocumentType;
use App\Repositories\DocumentTypeRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentTypeController extends Controller
{
    public function __construct(private DocumentTypeRepository $repository)
    {
    }

    public function index(Request $request): View
    {
        $documentTypes = DocumentType::query()->orderBy('type')->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return View('document-types.index', compact('documentTypes'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return View(
            'document-types.create'
        );
    }

    public function store(DocumentTypeFormRequest $request): RedirectResponse
    {
        $documentType = $this->repository->add($request);

        return Redirect::route('document-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$documentType->type}' adicionado com sucesso"
        );
    }

    public function edit(DocumentType $documentType): View
    {
        return view('document-types.edit')->with('documentType', $documentType);
    }

    public function update(DocumentType $documentType, DocumentTypeFormRequest $request): RedirectResponse
    {
        $documentType->fill($request->all());
        $documentType->save();

        return Redirect::route('document-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$documentType->type}' atualizado com sucesso"
        )
        ;
    }

    public function destroy(DocumentType $documentType): RedirectResponse
    {
        $documentType->delete();

        return Redirect::route('document-types.index')->with(
            'mensagem.sucesso',
            "Tipo de documento '{$documentType->type}' removido com sucesso"
        );
    }
}
