<?php

namespace App\Http\Controllers;

use App\Models\UserStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserStatusController extends Controller
{
    public function index(Request $request): View
    {
        $allStatus = UserStatus::query()->orderBy('status_name')->get();

        return View(
            'users-status.index',
            compact('allStatus')
        );
    }

    public function create(): View
    {
        return View(
            'users-status.create'
        );
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        $status = UserStatus::create($data);

        return Redirect::route('users-status.index');
    }


    public function edit(UserStatus $status): View
    {
        return view(
            'users-status.edit'
        )->with('user', $status);
    }
}
