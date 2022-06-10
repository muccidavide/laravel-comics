@extends('layouts.app')

@section('main-content')

<main>
    <div class="products">

        <div class="container">
            <div>
                <button class="series_btn">
                    <h2>Current Series</h2>
                </button>
            </div>
            <div class="row ">
                @foreach($comics as $comic)
                <div class="col-2">
                    <div class="card_">
                        <div class="product">
                            <div class="product_img">
                                <img class="img-fluid" src="{{$comic['thumb']}}" alt="image of {{$comic['title']}}">

                            </div>
                            <h5 class="pb-2">{{$comic['series']}}</h5>
                        </div>
                    </div>
                </div>

                @endforeach

                <div>
                    <button class="load_btn">Load More</button>
                </div>
            </div>

        </div>
    </div>

    <div class="main_navigation">
        <div class="container">
            <div class="row">
                @foreach($banner as $item)
                <div class="col">
                    <img src="{{ $item['src'] }}" :alt="image of {{ $item['text'] }}" />
                    <h5 class="item_title">{{ $item['text'] }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</main>

@endsection