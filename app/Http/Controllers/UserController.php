<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(User $user): View
    {
        $users = $user->all();

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

    public function store(Request $request, User $user)
    {
        $data = $request->except(['user_photo', '_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        Auth::login($user);

        return to_route('users.index');
    }


    public function edit(Office $office, Department $department, User $user): View
    {
        $offices = $office->all();
        $departments = $department->all();

        return view(
            'users.edit',
            compact('offices', 'departments')
        )->with('user', $user);
    }
}
