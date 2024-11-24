<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background: linear-gradient(135deg, #1E3A8A, #2563EB);
            color: #fff;
        }

        .sidebar a:hover {
            background-color: #4F46E5;
            color: #fff;
        }

        .submenu {
            display: none;
            flex-direction: column;
            margin-left: 20px;
        }

        .submenu.active {
            display: flex;
        }
    </style>
    <script>
        function toggleSubmenu() {
            const submenu = document.getElementById("kelasSubmenu");
            submenu.classList.toggle("active");
        }
    </script>
</head>
<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="sidebar w-64 p-5 shadow flex flex-col justify-between">
        <div>
            <!-- Logo -->
            <div class="flex items-center mb-6">
                <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/ffffff/external-education-education-flatart-icons-flat-flatarticons.png" 
                     alt="Bimbel Logo" class="w-10 h-10 mr-2">
                <h1 class="text-xl font-bold">BIMBEL G109</h1>
            </div>

            <!-- Profile -->
            <div class="profile text-center mb-6">
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="mx-auto rounded-full mb-2">
                <h2 class="text-lg font-semibold">Karthi Madesh</h2>
                <p class="text-yellow-300">Admin</p>
            </div>

            <!-- Sidebar Links -->
            <a href="dashboard.html" class="flex items-center p-2 mb-2 text-gray-700 hover:bg-blue-500 hover:text-white rounded">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/home-page.png" alt="Home" class="w-5 h-5 mr-2">
                Dashboard
            </a>
            <!-- Dropdown Menu -->
            <div>
                <button onclick="toggleSubmenu()" class="flex items-center w-full p-2 mb-2 text-white hover:bg-blue-500 rounded">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/classroom.png" alt="Kelas" class="w-5 h-5 mr-2">
                    Kelas
                </button>
                <div id="kelasSubmenu" class="submenu active">
                    <a href="siswa.html" class="flex items-center p-2 mb-2 bg-blue-500 text-white rounded">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/student-male--v1.png" alt="Siswa" class="w-5 h-5 mr-2">
                        Siswa
                    </a>
                    <a href="absensi.html" class="flex items-center p-2 mb-2 text-gray-700 hover:bg-blue-500 rounded">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/attendance-mark.png" alt="Absensi" class="w-5 h-5 mr-2">
                        Absensi
                    </a>
                </div>
            </div>
            <a href="laporan.html" class="flex items-center p-2 mb-2 text-gray-700 hover:bg-blue-500 hover:text-white rounded">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/report-card.png" alt="Laporan" class="w-5 h-5 mr-2">
                Laporan
            </a>
            <a href="buat-akun.html" class="flex items-center p-2 mb-2 text-gray-700 hover:bg-blue-500 hover:text-white rounded">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/add-user-male.png" alt="Buat Akun" class="w-5 h-5 mr-2">
                Buat Akun
            </a>
        </div>

        <!-- Logout -->
        <a href="logout.html" class="flex items-center p-2 text-gray-700 hover:bg-blue-500 hover:text-white rounded">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/logout-rounded.png" alt="Logout" class="w-5 h-5 mr-2">
            Logout
        </a>
    </div>