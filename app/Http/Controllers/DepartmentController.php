<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index(Request $request): View
    {
        $departments = Department::query()->orderBy('department_name')->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return View(
            'departments.index',
            compact('departments')
        )->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(): View
    {
        return View(
            'departments.create'
        );
    }

    public function store(DepartmentFormRequest $request): RedirectResponse
    {
        $data = $request->all();
        $department = Department::create($data);

        return Redirect::route('departments.index')->with(
            'mensagem.sucesso',
            "Departamento '{$department->department_name}' adicionado com sucesso"
        );
    }

    public function edit(Department $department): View
    {
        return view('departments.edit')->with('department', $department);
    }

    public function update(Department $department, DepartmentFormRequest $request): RedirectResponse
    {
        $department->fill($request->all());
        $department->save();

        return Redirect::route('departments.index')->with(
            'mensagem.sucesso',
            "Departamento '{$department->department_name}' atualizado com sucesso"
        )
        ;
    }

    public function destroy(Department $department): RedirectResponse
    {
        $department->delete();

        return Redirect::route('departments.index')->with(
            'mensagem.sucesso',
            "Departamento '{$department->department_name}' removido com sucesso"
        );
    }
}
