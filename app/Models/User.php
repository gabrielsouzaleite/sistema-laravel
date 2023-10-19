<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'user_name',
        'status_id',
        'level_id',
        'birth_date',
        'department_id',
        'office_id'
    ];

    public function status()
    {
        return $this->hasOne(UserStatus::class, 'id', 'status_id');
    }

    public function level()
    {
        return $this->hasOne(UserLevel::class, 'id', 'level_id');
    }

    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function office()
    {
        return $this->hasOne(Office::class, 'id', 'office_id');
    }
}
