@extends('layouts.main')
@section('container')
    <h2>Menu: </h2><br>

    @foreach ($menus as $menu)
        <ul style="list-style: none" class="mb-5 border-bottom">
        
            <li>
                <h3>
                    <a href="/menus/{{ $menu->slug }}" class="text-decoration-none">
                        {{ $menu->menu }}
                    </a>
                </h3>
                <p>By <a href="#">{{ $menu->kantin->name }}</a> di kategori <a href="/categories/{{ $menu->category->name }} "
                    class="text-decoration-none" >{{ $menu->category->name }}</a></p>
            </li>

        </ul>
    @endforeach

@endsection