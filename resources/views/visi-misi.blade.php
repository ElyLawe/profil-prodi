@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')
    <h1>Visi & Misi Program Studi</h1>
    
    <h3>Visi</h3>
    <p>{{ $visi }}</p>

    <h3>Misi</h3>
    <ol>
        @foreach ($misi as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
@endsection