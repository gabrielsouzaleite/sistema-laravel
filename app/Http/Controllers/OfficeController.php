<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OfficeController extends Controller
{
    public function index(Office $office): View
    {
        $offices = $office->all();

        return View(
            'offices.index',
            compact('offices')
        );
    }

    public function create(): View
    {
        return View(
            'offices.create'
        );
    }

    public function store(Request $request, Office $office): RedirectResponse
    {
        $data = $request->all();

        $office->create($data);

        return Redirect::route('offices.index');
    }

    public function edit(Office $office): View
    {
        return view('offices.edit')->with('office', $office);
    }

    public function update(Office $office, Request $request): RedirectResponse
    {
        $office->fill($request->all());
        $office->save();

        return Redirect::route('offices.index');
    }

    public function destroy(Office $office): RedirectResponse
    {
        $office->delete();

        return Redirect::route('offices.index');
    }
}
