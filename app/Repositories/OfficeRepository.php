<?php

namespace App\Repositories;

use App\Http\Requests\OfficeFormRequest;
use App\Models\Office;

interface OfficeRepository
{
    public function add(OfficeFormRequest $request): Office;
}
