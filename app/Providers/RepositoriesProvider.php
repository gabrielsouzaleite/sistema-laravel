<?php

namespace App\Providers;

use App\Repositories\{DepartmentRepository,
    DocumentTypeRepository,
    EloquentDepartmentRepository,
    EloquentDocumentTypeRepository,
    EloquentOfficeRepository,
    EloquentPublicationTypeRepository,
    OfficeRepository,
    PublicationTypeRepository
};
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public array $bindings = [
    DepartmentRepository::class => EloquentDepartmentRepository::class,
    OfficeRepository::class => EloquentOfficeRepository::class,
    DocumentTypeRepository::class => EloquentDocumentTypeRepository::class,
    PublicationTypeRepository::class => EloquentPublicationTypeRepository::class,
    ];
}
