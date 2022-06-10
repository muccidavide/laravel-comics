@php

$navItems = config('db.navItems');

@endphp



<header id="header_site">
    <div class="container">
        <div class="row">
            <div class="site_logo col">
                <img src="{{ asset('img/dc-logo.png')}}" alt="logo DC" />
            </div>
            <nav class="nav_site col">
                <ul class="row mb-0 p-1">
                    @foreach($navItems as $link)
                    <li class="col">
                        <a href="{{route($link)}}">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="jumbotron">
        <img src="{{asset('img/jumbotron.jpg')}} ">
    </div>
</header>