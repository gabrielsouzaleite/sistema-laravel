<?php

use App\Models\Department;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 225)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('user_name', 225);
            $table->unsignedTinyInteger('user_status');
            $table->unsignedTinyInteger('user_level');
            $table->date('birth_date');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('office_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
