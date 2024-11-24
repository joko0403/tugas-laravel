@extends('layouts.sidebar')

@section('title', 'Daftar Siswa')

@section('content')
<div class="flex-grow p-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Daftar Siswa</h1>
    <p class="text-center text-gray-600 mb-8">Kelola data siswa di platform Bimbel G109.</p>

    <!-- Search Bar dan Button Tambah Siswa -->
    <div class="flex justify-between items-center mb-4">
        <input type="text" id="searchInput" onkeyup="searchSiswa()" class="w-1/3 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Cari siswa berdasarkan nama">
        <button onclick="openModal('tambahModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
            Tambah Siswa
        </button>
    </div>

    <!-- Tabel Data Siswa -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border-collapse border border-gray-200" id="siswaTable">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-4 py-2 text-left font-semibold">ID</th>
                    <th class="px-4 py-2 text-left font-semibold">Nama</th>
                    <th class="px-4 py-2 text-left font-semibold">Kelas</th>
                    <th class="px-4 py-2 text-left font-semibold">Jenis Kelamin</th>
                    <th class="px-4 py-2 text-left font-semibold">No. Handphone</th>
                    <th class="px-4 py-2 text-left font-semibold">Alamat</th>
                    <th class="px-4 py-2 text-center font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">John Doe</td>
                    <td class="px-4 py-2">Pagi</td>
                    <td class="px-4 py-2">Laki-Laki</td>
                    <td class="px-4 py-2">08123456789</td>
                    <td class="px-4 py-2">Jl. Sudirman No. 10</td>
                    <td class="px-4 py-2 text-center">
                        <button onclick="openModal('editModal', {id: 1, name: 'John Doe', class: 'Pagi', gender: 'Laki-Laki', phone: '08123456789', address: 'Jl. Sudirman No. 10'})" 
                                class="text-blue-500 hover:text-blue-700 mr-2">
                            <img src="https://img.icons8.com/ios-glyphs/24/007bff/edit--v1.png" alt="Edit" title="Edit">
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <img src="https://img.icons8.com/ios-glyphs/24/ff0000/trash--v1.png" alt="Delete" title="Hapus">
                        </button>
                    </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">Jane Smith</td>
                    <td class="px-4 py-2">Siang</td>
                    <td class="px-4 py-2">Perempuan</td>
                    <td class="px-4 py-2">08234567890</td>
                    <td class="px-4 py-2">Jl. Thamrin No. 15</td>
                    <td class="px-4 py-2 text-center">
                        <button onclick="openModal('editModal', {id: 2, name: 'Jane Smith', class: 'Siang', gender: 'Perempuan', phone: '08234567890', address: 'Jl. Thamrin No. 15'})" 
                                class="text-blue-500 hover:text-blue-700 mr-2">
                            <img src="https://img.icons8.com/ios-glyphs/24/007bff/edit--v1.png" alt="Edit" title="Edit">
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <img src="https://img.icons8.com/ios-glyphs/24/ff0000/trash--v1.png" alt="Delete" title="Hapus">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal Tambah Siswa -->
<div id="tambahModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-11/12 md:w-1/2 p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold">Tambah Siswa</h2>
            <button onclick="closeModal('tambahModal')" class="text-gray-500 hover:text-gray-700">✖</button>
        </div>
        <form>
            <div class="mb-4">
                <label for="tambahNama" class="block text-sm font-semibold">Nama</label>
                <input type="text" id="tambahNama" class="w-full px-4 py-2 border rounded-lg" placeholder="Masukkan Nama">
            </div>
            <div class="mb-4">
                <label for="tambahKelas" class="block text-sm font-semibold">Kelas</label>
                <select id="tambahKelas" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tambahGender" class="block text-sm font-semibold">Jenis Kelamin</label>
                <select id="tambahGender" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tambahPhone" class="block text-sm font-semibold">No. Handphone</label>
                <input type="text" id="tambahPhone" class="w-full px-4 py-2 border rounded-lg" placeholder="Masukkan No. Handphone">
            </div>
            <div class="mb-4">
                <label for="tambahAddress" class="block text-sm font-semibold">Alamat</label>
                <textarea id="tambahAddress" class="w-full px-4 py-2 border rounded-lg" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeModal('tambahModal')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded mr-2">Batal</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Siswa -->
<div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-11/12 md:w-1/2 p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold">Edit Siswa</h2>
            <button onclick="closeModal('editModal')" class="text-gray-500 hover:text-gray-700">✖</button>
        </div>
        <form>
            <div class="mb-4">
                <label for="editNama" class="block text-sm font-semibold">Nama</label>
                <input type="text" id="editNama" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="editKelas" class="block text-sm font-semibold">Kelas</label>
                <select id="editKelas" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="editGender" class="block text-sm font-semibold">Jenis Kelamin</label>
                <select id="editGender" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="editPhone" class="block text-sm font-semibold">No. Handphone</label>
                <input type="text" id="editPhone" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="editAddress" class="block text-sm font-semibold">Alamat</label>
                <textarea id="editAddress" class="w-full px-4 py-2 border rounded-lg" rows="3"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeModal('editModal')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded mr-2">Batal</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(modalId, data = null) {
        const modal = document.getElementById(modalId);
        modal.classList.remove('hidden');

        if (modalId === 'editModal' && data) {
            document.getElementById('editNama').value = data.name;
            document.getElementById('editKelas').value = data.class;
            document.getElementById('editGender').value = data.gender;
            document.getElementById('editPhone').value = data.phone;
            document.getElementById('editAddress').value = data.address;
        }
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
    }

    function searchSiswa() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const table = document.getElementById('siswaTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) { // Start from index 1 to skip the header row
            const nameCell = rows[i].getElementsByTagName('td')[1];
            if (nameCell) {
                const nameText = nameCell.textContent || nameCell.innerText;
                if (nameText.toLowerCase().indexOf(input) > -1) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    }
</script>

@endsection  