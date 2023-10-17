<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

    public function create(): View
    {
        return View(
            'departments.create'
        );
    }

    public function store(Request $request, Department $department): RedirectResponse
    {
        $data = $request->all();

        $department->create($data);

        return Redirect::route('departments.index');
    }

    public function edit(Department $department): View
    {
        return view('departments.edit')->with('department', $department);
    }

    public function update(Department $department, Request $request): RedirectResponse
    {
        $department->fill($request->all());
        $department->save();

        return Redirect::route('departments.index');
    }

    public function destroy(Department $department): RedirectResponse
    {
        $department->delete();

        return Redirect::route('departments.index');
    }
}
