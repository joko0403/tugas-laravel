<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Menyimpan data siswa baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Siswa berhasil ditambahkan!');
    }

    /**
     * Memperbarui data siswa.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        $student->update($request->all());

        return redirect()->back()->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('success', 'Siswa berhasil dihapus!');
    }
}
