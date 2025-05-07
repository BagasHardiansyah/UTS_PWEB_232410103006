@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Status Surat</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg shadow-sm">
            <thead class="bg-blue-100 text-gray-800 text-sm uppercase tracking-wide">
                <tr>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">NIM</th>
                    <th class="px-6 py-3 text-left">Jenis Surat</th>
                    <th class="px-6 py-3 text-left">Nama Surat</th>
                    <th class="px-6 py-3 text-left">Nama File</th>
                    <th class="px-6 py-3 text-left">Tanggal Pengajuan</th>
                    <th class="px-6 py-3 text-left">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-700 text-sm">
                @foreach ($surat as $item)
                <tr class="hover:bg-blue-50 border-b">
                    <td class="px-6 py-3">{{ $item['nama'] }}</td>
                    <td class="px-6 py-3">{{ $item['nim'] }}</td>
                    <td class="px-6 py-3">{{ $item['jenis'] }}</td>
                    <td class="px-6 py-3">{{ $item['judul'] }}</td>
                    <td class="px-6 py-3 text-blue-600">{{ $item['file'] }}</td>
                    <td class="px-6 py-3">{{ $item['tanggal'] }}</td>
                    <td class="px-6 py-3">
                        <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $item['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
