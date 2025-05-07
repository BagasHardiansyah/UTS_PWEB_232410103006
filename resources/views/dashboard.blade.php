<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Surat Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen font-sans">

    <!-- Navbar -->
    <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-800">Sistem Surat Mahasiswa</h1>
        <nav class="space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Pengelolaan Surat</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Profil</a>
        </nav>
    </header>

    @extends('layouts.app')

    @section('content')

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-pink-500 to-purple-600 text-white min-h-screen p-6 space-y-4">
            <div class="text-2xl font-bold mb-6">Menu</div>
            <ul class="space-y-2">
                <li><a href="#" class="block hover:bg-pink-600 rounded px-3 py-2">Profil</a></li>
                <li><a href="#" class="block hover:bg-pink-600 rounded px-3 py-2">Data Mahasiswa</a></li>
                <li><a href="#" class="block hover:bg-pink-600 rounded px-3 py-2">Data Surat</a></li>
                <li><a href="#" class="block hover:bg-pink-600 rounded px-3 py-2">Konfirmasi</a></li>
                <li><a href="#" class="block hover:bg-pink-600 rounded px-3 py-2 font-semibold text-yellow-300">Dashboard</a></li>
                <li><a href="#" class="block hover:bg-red-500 rounded px-3 py-2">Logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-red-400 text-white p-5 rounded-xl shadow-md min-h-[100px] flex flex-col justify-center">
                    <h2 class="text-lg font-semibold">Jumlah Mahasiswa</h2>
                    <p class="text-3xl font-bold mt-2">2</p>
                </div>
                <div class="bg-blue-400 text-white p-5 rounded-xl shadow-md min-h-[100px] flex flex-col justify-center">
                    <h2 class="text-lg font-semibold">Transaksi Surat</h2>
                    <p class="text-3xl font-bold mt-2">5</p>
                </div>
                <div class="bg-green-400 text-white p-6 rounded-xl shadow-lg min-h-[100px] flex flex-col justify-center break-words">
                    <h2 class="text-xl font-semibold leading-snug">Hai Selamat Datang {{ $username }}</h2>
                    <p class="text-sm mt-1">Tetap Semangat dan Produktif 💪</p>
                </div>

            </div>

            <!-- Data Surat -->
            <div class="bg-gradient-to-r from-green-200 via-yellow-100 to-pink-200 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-gray-800">DATA SURAT</h3>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Surat</button>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gray-200 text-gray-700 text-left">
                                <th class="py-2 px-4">No</th>
                                <th class="py-2 px-4">Nama Surat</th>
                                <th class="py-2 px-4">Jenis Surat</th>
                                <th class="py-2 px-4">Aksi Edit</th>
                                <th class="py-2 px-4">Aksi Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2 px-4">1</td>
                                <td class="py-2 px-4">Surat Keterangan</td>
                                <td class="py-2 px-4">Keterangan</td>
                                <td class="py-2 px-4"><span class="bg-red-500 text-white px-3 py-1 rounded">Ditolak</span></td>
                                <td class="py-2 px-4"><span class="bg-gray-800 text-white px-3 py-1 rounded">Hapus</span></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4">2</td>
                                <td class="py-2 px-4">Surat Magang</td>
                                <td class="py-2 px-4">Magang</td>
                                <td class="py-2 px-4"><span class="bg-red-500 text-white px-3 py-1 rounded">Ditolak</span></td>
                                <td class="py-2 px-4"><span class="bg-gray-800 text-white px-3 py-1 rounded">Hapus</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
