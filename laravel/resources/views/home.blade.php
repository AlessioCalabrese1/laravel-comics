@extends('layouts.main')

@section('showcase')
<main>
    <div class="jumbotron-container">
        <img class="img-fluid" src="{{asset('images/jumbotron.jpg')}}" alt="jumbotron">
    </div>

    <div class="comics-showcase ">
        <div class="current-series">
            Current Series
        </div>
        <div class="comics-container">
            <div class="d-flex flex-wrap pt-4">
                @foreach ($comics as $comic)
                    <div class="comic">
                        <div class="thumb-container">
                            <img src="{{$comic->image}}" alt="{{$comic->title}}">
                        </div>
                        
                        <p class="comic-name">
                            {{$comic->title}}
                        </p>
                    </div>
                @endforeach
            </div>

            <a href="#" class="btn">Load More</a>
        </div>
    </div>

    {{-- <div class="main-options-container">
        <ul>
            <li v-for="(option, index) in mainOptions" :key="index">
                <div class="option-image-container">
                    <img class="option-image" :src="require(`../assets/img/${option.image}`)" :alt="option.link">
                </div>
                
                <p class="option-text ps-3">
                    {{ option.link }}
                </p>
            </li>
        </ul>
    </div> --}}
</main>
@endsection