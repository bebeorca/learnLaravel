@extends('layouts.main')
@section('container')
    <h2>Menu: </h2><br>

    @foreach ($menus as $menu)
        <ul style="list-style: none">
        
            <li>
                <h3>
                    <a href="/menu/{{ $menu->slug }}">
                        {{ $menu->menu }}
                    </a>
                </h3>
                
            </li>

        </ul>
    @endforeach

@endsection