<?php

namespace App\Providers;

use App\Repositories\DepartmentRepository;
use App\Repositories\EloquentDepartmentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public array $bindings = [
    DepartmentRepository::class => EloquentDepartmentRepository::class
    ];
}
