@extends('layouts.sidebar')

@section('title', 'Form Absensi - Kelas Pagi')

@section('content')
<div class="flex-grow p-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Form Absensi - Kelas Pagi</h1>
    <p class="text-center text-gray-600 mb-8">Tandai kehadiran siswa untuk kelas Pagi.</p>

    <!-- Form Absensi -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <table class="min-w-full border-collapse border border-gray-200">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left font-semibold">ID</th>
                        <th class="px-4 py-2 text-left font-semibold">Nama</th>
                        <th class="px-4 py-2 text-center font-semibold">Hadir</th>
                        <th class="px-4 py-2 text-center font-semibold">Izin</th>
                        <th class="px-4 py-2 text-center font-semibold">Alfa</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Loop data siswa -->
                    @foreach ($students as $student)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $student->id }}</td>
                        <td class="px-4 py-2">{{ $student->name }}</td>
                        <td class="px-4 py-2 text-center">
                            <input type="radio" name="attendance[{{ $student->id }}]" value="Hadir" required>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <input type="radio" name="attendance[{{ $student->id }}]" value="Izin" required>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <input type="radio" name="attendance[{{ $student->id }}]" value="Alfa" required>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Tombol Submit -->
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded shadow">
                    Simpan Absensi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
