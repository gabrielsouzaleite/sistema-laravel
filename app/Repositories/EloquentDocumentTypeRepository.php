<?php

namespace App\Repositories;

use App\Http\Requests\DocumentTypeFormRequest;
use App\Models\DocumentType;
use Illuminate\Support\Facades\DB;

class EloquentDocumentTypeRepository implements DocumentTypeRepository
{
    public function add(DocumentTypeFormRequest $request): DocumentType
    {
        return  DB::transaction(function () use ($request) {
            $data = $request->all();
            $documentType = DocumentType::create($data);
            return $documentType;
        });
    }
}
