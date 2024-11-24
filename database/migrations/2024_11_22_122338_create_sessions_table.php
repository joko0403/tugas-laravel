<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID sesi sebagai primary key
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Foreign key ke users (opsional)
            $table->string('ip_address', 45)->nullable(); // IP address pengguna
            $table->text('user_agent')->nullable(); // Informasi browser pengguna
            $table->text('payload'); // Data sesi yang disimpan
            $table->integer('last_activity'); // Waktu terakhir aktivitas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
