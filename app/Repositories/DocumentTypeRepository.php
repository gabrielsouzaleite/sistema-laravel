<?php

namespace App\Repositories;

use App\Http\Requests\DocumentTypeFormRequest;
use App\Models\DocumentType;

interface DocumentTypeRepository
{
    public function add(DocumentTypeFormRequest $request): DocumentType;
}
