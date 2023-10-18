<?php

namespace App\Repositories;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Department;

interface DepartmentRepository
{
    public function add(DepartmentFormRequest $request): Department;
}
