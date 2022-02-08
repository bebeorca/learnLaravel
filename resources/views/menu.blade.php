@extends('layouts/main')

@section('container')
    
    <h1>{{ $menu->menu }}</h1>
    <h4>Rp {{ $menu->harga }}</h4>
    <p>By <a href="#">{{ $menu->kantin->name }}</a> di kategori <a href="/categories/{{ $menu->category->name }} "
        class="text-decoration-none" >{{ $menu->category->name }}</a></p>
    {{ $menu->deskripsi }}

@endsection