@extends('layouts.app')

@section('main-content')

<div class="wrapper ">
    <div class="blue_row">
    </div>
    <div class="container text-start m-auto position-relative">
        <div class="row my-5">
            <div class="col-8">
                <h3 class="fw-bold">{{ $comic['title'] }}</h3>
                <div class="d-flex justify-content-between px-3 price_aviability">
                    <div class="price">
                        <span>{{ $comic['price'] }}</span>
                        <span>Aviability</span>
                    </div>
                    <div class="check">
                        <span>Check</span>
                    </div>

                </div>
                <div class="col">
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>

            <div class="col-3">
                <div class="ban_box">
                    <img src=" {{ asset('img\adv.jpg') }}" alt="cover of {{ $comic['title'] }}">
                </div>
            </div>
        </div>
        <div class="poster">
            <img src="{{ $comic['thumb']}}" alt="">

        </div>

    </div>

    <div class="metadata">
        <div class="container text-start mb-3 ">
            <div class="row row-cols-2 align-items-start">
                <div class="col">
                    <h4>Talent</h4>
                    <div class="art pt-4 d-flex justify-content-between">
                        <div>
                            <h5>Art by:</h5>
                        </div>
                        <div class="artist w-75 color_primary_light ">
                            <p>
                                @forelse($comic['artists'] as $artist)
                                {{ $artist }},

                                @empty
                            <p>No Artist Found</p>

                            @endforelse
                            </p>
                        </div>
                    </div>

                    <div class="written d-flex justify-content-between">
                        <div>
                            <h5>Written by:</h5>
                        </div>
                        <div class="authors w-75 color_primary_light">
                            <p>
                                @forelse($comic['writers'] as $writer)
                                {{ $writer }},

                                @empty
                            <p>No writer Found</p>

                            @endforelse
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col ">
                    <div class="specs">
                        <h4>Specs</h4>
                        <div class="series pt-4 d-flex justify-content-between">
                            <div>
                                <h5>Series:</h5>
                            </div>
                            <div class="w-75 color_primary_light">
                                <p>
                                    {{ $comic['series']}}
                                </p>
                            </div>
                        </div>

                        <div class="price d-flex justify-content-between">
                            <div>
                                <h5>Us Price:</h5>
                            </div>
                            <div class="w-75 color_primary_light">
                                <p>
                                    {{ $comic['price']}}
                                </p>
                            </div>
                        </div>

                        <div class="on_sale d-flex justify-content-between">
                            <div>
                                <h5>On Sale Date:</h5>
                            </div>
                            <div class="w-75 color_primary_light">
                                <p>
                                    {{ $comic['sale_date']}}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



</div>




@endsection