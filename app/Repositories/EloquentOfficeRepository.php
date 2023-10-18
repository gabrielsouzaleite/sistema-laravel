<?php

namespace App\Repositories;

use App\Http\Requests\OfficeFormRequest;
use App\Models\Office;
use Illuminate\Support\Facades\DB;

class EloquentOfficeRepository implements OfficeRepository
{
    public function add(OfficeFormRequest $request): Office
    {
        return  DB::transaction(function () use ($request) {

            $data = $request->all();
            $office = Office::create($data);

            return $office
            ;
        });
    }
}
