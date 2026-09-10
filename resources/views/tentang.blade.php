@extends('layouts.app')

@section('title', 'Tentang Prodi')

@section('content')
    <h1>{{ $jurusan }}</h1>
    <p>Program Studi: {{ $namaProdi }}</p>

    <h3>Status Akreditasi</h3>
    @if ($akreditasi == 'Unggul')
        <p>Program Studi Terakreditasi Unggul</p>
    @elseif ($akreditasi == 'Baik Sekali')
        <p>Program Studi Terakreditasi Baik Sekali</p>
    @else
        <p>Informasi akreditasi belum tersedia.</p>
    @endif
@endsection