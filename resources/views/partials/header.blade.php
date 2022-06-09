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