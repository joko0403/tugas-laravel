<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;

class AbsensiController extends Controller
{
    /**
     * Menampilkan form absensi berdasarkan kelas.
     */
    public function showAbsensiKelas($kelas)
    {
        $students = Student::where('class', $kelas)->get();

        return view('absensi-kelas', [
            'students' => $students,
            'kelas' => ucfirst($kelas),
        ]);
    }

    /**
     * Menyimpan data absensi siswa.
     */
    public function store(Request $request)
    {
        foreach ($request->attendance as $studentId => $status) {
            Attendance::create([
                'student_id' => $studentId,
                'tanggal' => now(),
                'hadir' => $status === 'Hadir' ? 1 : 0,
            ]);
        }

        return redirect()->back()->with('success', 'Absensi berhasil disimpan!');
    }
}
