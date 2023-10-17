<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
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

    public function store(Request $request, Office $office)
    {
        $data = $request->all();

        $office->create($data);

        return redirect()->route('offices.index');
    }

    public function edit(Office $office): View
    {
        return view('offices.edit')->with('office', $office);
    }

    public function update(Office $office, Request $request)
    {
        $office->fill($request->all());
        $office->save();

        return to_route('offices.index');
    }

    public function destroy(Office $office)
    {
        $office->delete();

        return to_route('offices.index');
    }
}
