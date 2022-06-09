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
                        <button>
                            <h3>Sign Up Now</h3>
                        </button>
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