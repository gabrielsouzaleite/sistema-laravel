<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index(Department $department): View
    {
        $departments = $department->all();

        return View(
            'departments.index',
            compact('departments')
        );
    }

    public function create(): view
    {
        return View(
            'departments.create'
        );
    }

    public function store(Request $request, Department $department)
    {
        $data = $request->all();

        $department->create($data);

        return redirect()->route('departments.index');
    }

    public function edit(Department $department): View
    {
        return view('departments.edit')->with('department', $department);
    }

    public function update(Department $department, Request $request)
    {
        $department->fill($request->all());
        $department->save();

        return to_route('departments.index');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return to_route('departments.index');
    }
}
