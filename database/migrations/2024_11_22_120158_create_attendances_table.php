<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('student_id') // Foreign key ke tabel students
                  ->constrained('students')
                  ->onDelete('cascade'); // Jika student dihapus, absensi juga dihapus
            $table->date('tanggal'); // Tanggal absensi
            $table->boolean('hadir')->default(0); // Status hadir (1 = hadir, 0 = tidak hadir)
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
        // Hapus foreign key sebelum menghapus tabel
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign(['student_id']); // Hapus constraint foreign key
        });

        // Hapus tabel attendances
        Schema::dropIfExists('attendances');
    }
}
