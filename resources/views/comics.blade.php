@extends('layouts.app')

@section('content')

<header id="header_site" class="container">
    <div class="row">
        <div class="site_logo col">
            <img src="../img/dc-logo.png" alt="logo DC" />
        </div>
        <nav class="nav_site col">
            <ul class="row mb-0 p-1">
                @foreach($navItems as $link)
                <li class="col">
                    <a href="#">{{ $link }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<main>


    <div class="jumbotron">
        <img src="../img/jumbotron.jpg" alt="">
    </div>


    <div class="products">

        <div class="container">
            <div>
                <button class="series_btn">
                    <h2>Current Series</h2>
                </button>
            </div>
            <div class="row ">
                @forelse($comics as $comic)
                <div class="col-2">
                    <div class="card_">
                        <div class="product">
                            <div class="product_img">
                                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">

                            </div>
                            <h5 class="pb-2">{{$comic['title']}}</h5>
                        </div>
                    </div>
                </div>


                @empty
                <div class="col">
                    <p>No Products to show!</p>
                </div>

                @endforelse

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
                    <img src="{{ $item['src'] }}" :alt="item.text" />
                    <h5>{{ $item['text'] }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</main>


@endsection