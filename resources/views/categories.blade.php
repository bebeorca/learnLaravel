@extends('layouts.main')
@section('container')
    <h2>Kategori</h2><br>

    @foreach ($categories as $category)
        <ul style="list-style: none">
        
            <li>
                <h3>
                    <a href="/categories/{{ $category->slug }}">
                        {{ $category->name }}
                    </a>
                </h3>
                
            </li>

        </ul>
    @endforeach

@endsection