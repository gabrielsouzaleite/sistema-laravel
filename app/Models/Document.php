<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function types()
    {
        return $this->hasOne(DocumentType::class, 'id', 'document_type');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function departments()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
