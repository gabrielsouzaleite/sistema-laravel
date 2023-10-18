<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentTypeController extends Controller
{
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
}
