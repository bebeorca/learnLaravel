@extends('layouts/main')

@section('container')
    
    <h1>{{ $menu->menu }}</h1>
    <h4>Rp {{ $menu->harga }}</h4>
    <p>In category <a href="/categories/{{ $menu->category->name }}">{{ $menu->category->name }}</a></p>
    <br><br>
    {{ $menu->deskripsi }}

@endsection