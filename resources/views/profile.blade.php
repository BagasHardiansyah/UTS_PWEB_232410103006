@extends('layouts.app')

@section('content')
@php
    // Ambil username dari query string
    $user = request()->query('username', 'Guest');
@endphp

<div class="max-w-4xl mx-auto bg-white p-20 shadow-2xl rounded-3xl mt-24">
    <h2 class="text-5xl font-extrabold mb-10 text-blue-700 text-center">Profil Mahasiswa</h2>
    <p class="text-3xl text-center mb-10">
        Selamat datang, <span class="font-bold text-blue-800">{{ $username }}</span>!
    </p>
    <div class="text-2xl text-gray-800 space-y-4 text-center">
        <p><strong>Username :</strong> {{ $username }}</p>
        <p><strong>Status :</strong> Mahasiswa Aktif</p>
    </div>
</div>
@endsection
