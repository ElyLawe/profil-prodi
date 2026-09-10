<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    $namaProdi = 'Teknik Informatika';
    $jurusan = 'Teknologi Informasi';
    $akreditasi = 'Baik Sekali';

    return view('tentang', compact('namaProdi', 'jurusan', 'akreditasi'));
});

Route::get('/dosen', function () {
    $dosen = [
        [
            'nama' => 'Budi Santoso',
            'nidn' => '0012345678',
            'jabatan' => 'Dosen'
        ],
        [
            'nama' => 'Siti Aminah',
            'nidn' => '0012345679',
            'jabatan' => 'Dosen'
        ],
        [
            'nama' => 'Andi Wijaya',
            'nidn' => '0012345680',
            'jabatan' => 'Ketua Program Studi'
        ]
    ];

    return view('dosen', compact('dosen'));
});

Route::get('/dosen/{nama}', function ($nama) {
    return view('detail-dosen', compact('nama'));
});

Route::get('/kontak', function () {
    return view('kontak');
});
// Route Visi & Misi
Route::get('/visi-misi', function () {
    $visi = 'Menjadi program studi unggulan di bidang rekayasa perangkat lunak dan teknologi informasi yang berdaya saing global.';
    $misi = [
        'Menyelenggarakan pendidikan berkualitas di bidang Teknologi Informasi.',
        'Melakukan penelitian inovatif yang bermanfaat bagi masyarakat.',
        'Mengembangkan kemitraan dan pengabdian masyarakat di bidang teknologi.'
    ];

    return view('visi-misi', compact('visi', 'misi'));
});

// Route Mata Kuliah
Route::get('/mata-kuliah', function () {
    $matkul = [
        [
            'kode' => 'TIF101',
            'nama' => 'Pemrograman Web',
            'sks' => 3,
            'semester' => 3
        ],
        [
            'kode' => 'TIF102',
            'nama' => 'Basis Data',
            'sks' => 3,
            'semester' => 3
        ],
        [
            'kode' => 'TIF103',
            'nama' => 'Struktur Data',
            'sks' => 2,
            'semester' => 2
        ]
    ];

    return view('mata-kuliah', compact('matkul'));
});