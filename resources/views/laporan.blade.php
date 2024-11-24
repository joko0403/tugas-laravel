@extends('layouts.sidebar')

@section('title', 'Laporan Perkembangan Siswa')

@section('content')
<div class="mb-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Laporan Perkembangan Siswa</h1>
        <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
            Tambah Laporan
        </button>
    </div>
    <div class="mt-4">
        <label for="periode" class="block text-sm font-semibold text-gray-700">Filter Periode</label>
        <div class="flex items-center space-x-4 mt-2">
            <input type="date" id="start_date" class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Tanggal Mulai">
            <span class="text-gray-500">s/d</span>
            <input type="date" id="end_date" class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Tanggal Akhir">
            <button onclick="filterLaporan()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg transition duration-300 ease-in-out">
                Terapkan Filter
            </button>
        </div>
    </div>
</div>

<!-- Grid Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Kelas Pagi -->
    <div class="card bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-500 mb-2">John Doe</h2>
        <p class="text-gray-600">Kelas: <span class="font-semibold">Pagi</span></p>
        <div class="my-4">
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Rata-rata Nilai:</span>
                <span class="text-lg font-bold text-green-500">85%</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Kehadiran:</span>
                <span class="text-lg font-bold text-yellow-500">90%</span>
            </div>
        </div>
        <p class="text-sm font-semibold text-gray-700">Saran :</span>
        <p class="text-sm text-gray-600 italic">"Siswa menunjukkan perkembangan yang baik, tetapi perlu meningkatkan fokus pada materi matematika."</p>
        <div class="flex justify-between mt-4">
            <button onclick="openDetailModal('John Doe', 'Pagi')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">
                Detail
            </button>
            <button onclick="openEditModal('John Doe', 'Pagi')" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit
            </button>
        </div>
    </div>

    <!-- Kelas Siang -->
    <div class="card bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-500 mb-2">Jane Smith</h2>
        <p class="text-gray-600">Kelas: <span class="font-semibold">Siang</span></p>
        <div class="my-4">
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Rata-rata Nilai:</span>
                <span class="text-lg font-bold text-green-500">78%</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Kehadiran:</span>
                <span class="text-lg font-bold text-yellow-500">95%</span>
            </div>
        </div>
        <p class="text-sm font-semibold text-gray-700">Saran :</span>
        <p class="text-sm text-gray-600 italic">"Siswa aktif dalam diskusi, namun perlu memperbaiki hasil ujian harian."</p>
        <div class="flex justify-between mt-4">
            <button onclick="openDetailModal('Jane Smith', 'Siang')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">
                Detail
            </button>
            <button onclick="openEditModal('Jane Smith', 'Siang')" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit
            </button>
        </div>
    </div>

    <!-- Kelas Malam -->
    <div class="card bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-500 mb-2">Adam Lee</h2>
        <p class="text-gray-600">Kelas: <span class="font-semibold">Malam</span></p>
        <div class="my-4">
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Rata-rata Nilai:</span>
                <span class="text-lg font-bold text-green-500">92%</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm font-semibold text-gray-700">Kehadiran:</span>
                <span class="text-lg font-bold text-yellow-500">88%</span>
            </div>
        </div>
        <p class="text-sm font-semibold text-gray-700">Saran :</span>
        <p class="text-sm text-gray-600 italic">"Memiliki pemahaman yang baik, tetapi perlu latihan soal lebih banyak untuk memperkuat konsep."</p>
        <div class="flex justify-between mt-4">
            <button onclick="openDetailModal('Adam Lee', 'Malam')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">
                Detail
            </button>
            <button onclick="openEditModal('Adam Lee', 'Malam')" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit
            </button>
        </div>
    </div>
</div>

<!-- Script -->
<script>
    function openDetailModal(name, kelas) {
        alert(`Detail laporan untuk ${name}, kelas ${kelas}`);
    }

    function openEditModal(name, kelas) {
        alert(`Edit laporan untuk ${name}, kelas ${kelas}`);
    }

    function filterLaporan() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        alert(`Filter diterapkan: ${startDate} hingga ${endDate}`);
    }
</script>
@endsection
