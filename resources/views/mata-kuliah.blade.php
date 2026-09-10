@extends('layouts.app')

@section('title', 'Mata Kuliah')

@section('content')
    <h1>Daftar Mata Kuliah</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matkul as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['sks'] }}</td>
                    <td>{{ $item['semester'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection