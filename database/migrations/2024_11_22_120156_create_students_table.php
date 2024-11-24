<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat tabel classes terlebih dahulu
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama kelas (misalnya Pagi, Siang, Malam)
            $table->timestamps(); // Kolom created_at dan updated_at
        });

        // Buat tabel students
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama siswa
            $table->foreignId('class_id') // Foreign key ke tabel classes
                  ->constrained('classes')
                  ->onDelete('cascade'); // Jika kelas dihapus, siswa juga ikut terhapus
            $table->string('gender'); // Jenis kelamin (Laki-Laki, Perempuan)
            $table->string('phone'); // Nomor telepon siswa
            $table->text('address'); // Alamat siswa
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Hapus foreign key dari tabel students terlebih dahulu
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['class_id']); // Hapus foreign key class_id
        });

        // Hapus tabel students
        Schema::dropIfExists('students');

        // Hapus tabel classes
        Schema::dropIfExists('classes');
    }
}
