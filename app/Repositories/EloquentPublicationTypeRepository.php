<?php

namespace App\Repositories;

use App\Http\Requests\PublicationTypeFormRequest;
use App\Models\PublicationType;
use Illuminate\Support\Facades\DB;

class EloquentPublicationTypeRepository implements PublicationTypeRepository
{
    public function add(PublicationTypeFormRequest $request): PublicationType
    {
        return  DB::transaction(function () use ($request) {
            $data = $request->all();
            $publicationType = PublicationType::create($data);
            return $publicationType;
        });
    }
}
