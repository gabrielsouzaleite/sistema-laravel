<?php

namespace App\Repositories;

use App\Http\Requests\PublicationTypeFormRequest;
use App\Models\PublicationType;

interface PublicationTypeRepository
{
    public function add(PublicationTypeFormRequest $request): PublicationType;
}
