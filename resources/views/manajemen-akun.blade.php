@extends('layouts.app')

@section('title', 'Manajemen Akun')

@section('content')
<div class="flex-grow p-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Manajemen Akun</h1>
    <p class="text-center text-gray-600">Daftar semua akun pengguna di aplikasi.</p>
    
    <!-- Tombol Tambah Akun -->
    <div class="text-right mb-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600">
            Tambah Akun
        </button>
    </div>

    <!-- Tabel Akun -->
    <table class="min-w-full border-collapse border border-gray-200 bg-white shadow-md rounded-lg">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="px-4 py-2 text-left font-semibold">ID</th>
                <th class="px-4 py-2 text-left font-semibold">Username</th>
                <th class="px-4 py-2 text-left font-semibold">Password</th>
                <th class="px-4 py-2 text-center font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $account->id }}</td>
                    <td class="px-4 py-2">{{ $account->username }}</td>
                    <td class="px-4 py-2">{{ $account->password }}</td>
                    <td class="px-4 py-2 text-center">
                        <button class="text-yellow-500 hover:text-yellow-700">✏️ Edit</button>
                        <button class="text-red-500 hover:text-red-700">🗑️ Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
