@extends('layouts.main')

@section('showcase')
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic->title }}
            </li>
        @endforeach
    </ul>
@endsection