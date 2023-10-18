<?php

namespace App\Repositories;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class EloquentDocumentTypeRepository implements DepartmentRepository
{
    public function add(DepartmentFormRequest $request): Department
    {
        return  DB::transaction(function () use ($request) {
            $data = $request->all();
            $department = Department::create($data);
            return $department;
        });
    }
}
