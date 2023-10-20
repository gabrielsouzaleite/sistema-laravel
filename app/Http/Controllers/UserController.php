<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Office;
use App\Models\Status;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
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

        $offices = Office::query()->orderBy('job_name')->get();
        $departments = Department::query()->orderBy('department_name')->get();
        $allStatus = Status::query()->orderBy('status_name')->get();
        $levels = UserLevel::query()->orderBy('level_name')->get();

        return View(
            'users.create',
            compact('departments', 'offices', 'allStatus', 'levels')
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
        $allStatus = Status::query()->orderBy('status_name')->get();
        $levels = UserLevel::query()->orderBy('level_name')->get();

        return view(
            'users.edit',
            compact('departments', 'offices', 'allStatus', 'levels')
        )->with('user', $user);
    }
}
