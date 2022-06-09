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

<footer id="footer_site">
    <div class="footer_wrapper">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="row links_bar">
              <div class="col">
                <ul>
                  <li>
                    <h3>{{ $footerLinks[0]['title'] }}</h3>
                  </li>
                  @foreach($footerLinks[0]['details'] as $link)
                  <li>
                    <a href="#">{{ $link }}</a>
                  </li>
                  @endforeach
                </ul>
                <ul>
                  <li>
                    <h3>{{ $footerLinks[1]['title'] }}</h3>
                  </li>
                  @foreach($footerLinks[1]['details'] as $link)
                  <li>
                    <a href="#">{{ $link }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li>
                    <h3>{{ $footerLinks[2]['title'] }}</h3>
                  </li>
                  @foreach($footerLinks[2]['details'] as $link)
                  <li>
                    <a href="#">{{ $link }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li>
                    <h3>{{ $footerLinks[3]['title'] }}</h3>
                  </li>
                  @foreach($footerLinks[3]['details'] as $link)
                  <li>
                    <a href="#">{{ $link }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <img class="logo_bg" src="../img/dc-logo-bg.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="footer_banner">
      <div class="container">
        <div class="row">
          <div class="col">
            <button><h3>Sign Up Now</h3></button>
          </div>
          <div class="col">
            <img src="../img/footer-facebook.png" alt="facebook icon" />
            <img src="../img/footer-twitter.png" alt="twitter icon" />
            <img src="../img/footer-youtube.png" alt="youtube icon" />
            <img src="../img/footer-pinterest.png" alt="pinterest icon" />
            <img src="../img/footer-periscope.png" alt="periscope icon" />
          </div>
        </div>
      </div>
    </div>
  </footer>


@endsection