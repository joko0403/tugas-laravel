<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name', 100);
            $table->string('email', 100)->unique();
         if (!Schema::hasColumn('users', 'password')) 
            $table->string('password');
            $table->enum('role', ['admin', 'staff'])->default('staff');
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
