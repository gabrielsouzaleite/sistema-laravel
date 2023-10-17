<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'login',
        'password',
        'user_name',
        'user_status',
        'user_level',
        'birth_date',
        'department_id',
        'office_id'
    ];

    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function office()
    {
        return $this->hasOne(Office::class, 'id', 'office_id');
    }
}
