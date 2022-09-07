@extends('layouts.main')

@php
$mainOptions = [
[
'link' => "DIGITAL COMICS",
'image' => "buy-comics-digital-comics.png"
],
[
'link' => "DC MERCHENDISE",
'image' => "buy-comics-merchandise.png"
],
[
'link' => "SUBSCRIPTION",
'image' => "buy-comics-subscriptions.png"
],
[
'link' => "COMIC SHOP LOCATOR",
'image' => "buy-comics-shop-locator.png"
],
[
'link' => "DC POWER VISA",
'image' => "buy-dc-power-visa.svg"
],
]
@endphp

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

    <div class="main-options-container">
        <ul>
            @foreach ($mainOptions as $item)
                <li>
                    <div class="option-image-container">
                        <img class="option-image" src="{{asset('images/' . $item['image'])}}" alt="{{$item['link']}}">
                    </div>

                    <p class="option-text ps-3">
                        {{ $item['link'] }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</main>
@endsection