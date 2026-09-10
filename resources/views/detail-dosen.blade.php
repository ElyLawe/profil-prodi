@extends('layouts.app')

@section('title', 'Detail Dosen')

@section('content')
    <h1>Detail Dosen</h1>
    <p>Nama Dosen: <strong>{{ ucfirst($nama) }}</strong></p>
    <a href="/dosen">&laquo; Kembali ke Daftar Dosen</a>
@endsection