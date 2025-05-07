<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        session(['username' => $username]);
        return redirect('/dashboard');
        return redirect('/profile');
        return redirect('/pengelolaan');
    }


    public function dashboard()
    {
        $username = session('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function profile()
    {
        $username = session('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $surat = [
            [
                'nama' => 'Mahasiswa 1',
                'nim' => '212410103006',
                'jenis' => 'Surat Aktif Kuliah',
                'judul' => 'Surat Aktif Kuliah',
                'file' => 'surat_aktif_kuliah.pdf',
                'tanggal' => '2025-05-07',
                'status' => 'Diterima',
            ],
            [
                'nama' => 'Mahasiswa 2',
                'nim' => '222410103006',
                'jenis' => 'Surat Magang',
                'judul' => 'Surat Magang',
                'file' => 'surat_magang.pdf',
                'tanggal' => '2025-05-06',
                'status' => 'Diterima',
            ],
            [
                'nama' => 'Mahasiswa 3',
                'nim' => '232410103006',
                'jenis' => 'Surat Keterangan',
                'judul' => 'Surat Keterangan',
                'file' => 'surat_keterangan.pdf',
                'tanggal' => '2025-05-05',
                'status' => 'Diterima',
            ],
        ];

        return view('pengelolaan', compact('surat'));
    }


}
