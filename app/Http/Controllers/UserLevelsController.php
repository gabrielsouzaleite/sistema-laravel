<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLevelsController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::query()->orderBy('user_name')->get();

        return View(
            'users.index',
            compact('users')
        );
    }

    public function create(Department $department, Office $office): View
    {
        $departments = $department->all();
        $offices = $office->all();
        return View(
            'users.create',
            compact('departments', 'offices')
        );
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->except(['user_photo', '_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return Redirect::route('users.index');
    }


    public function edit(Office $office, Department $department, User $user): View
    {
        $offices = Office::query()->orderBy('job_name')->get();
        $departments = Department::query()->orderBy('department_name')->get();

        return view(
            'users.edit',
            compact('departments', 'offices')
        )->with('user', $user);
    }
}
