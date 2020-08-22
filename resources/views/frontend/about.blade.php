@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="header-hero header-hero-2 ">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-12">
                            <div class="contenet-hero">
                                <h1>THE ART OF LUXURY APPAREL</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia libero
                                    quis odio unde ab officia est dolor.</p>
                                <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img
                                        src="{{asset('/img/arrow-right-wight.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-about">
                <div class="box-seat box-seat-full">
                    <div class="container-fluid">
                        <div class="inner-img" data-dsn-grid="move-up">
                            <img src="{{asset('/img/pexels.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1">
                        </div>
                        <div class="pro-text">
                            <h3 data-dsn-animate="up">Hello we are, <br> Dsn Grid.</h3>
                            <p data-dsn-animate="up">Founded in 2000, Dsn Grid has become one of the best
                                Digital
                                Agency in
                                ThemeForest.
                                Blue money going forward, but deploy to production. C-suite. First-order optimal
                                strategies build on a culture of contribution and inclusion so those options

                            </p>
                        </div>
                    </div>
                </div>

                <section class="intro-about section-margin section-padding hidden">
                    <div class="mask-bg"></div>
                    <div class="container">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="box-im">
                                    <div class="cover-bg" data-image-src="{{asset('/img/skills.jpg')}}"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="small-title">
                                    <span class="counter">01</span>
                                    <h5>About Us</h5>
                                </div>

                                <div class="content">
                                    <h5>Speaking of employee happiness -</h5>
                                    <h3>Our two goals are employee happiness and client happiness</h3>
                                    <p>We won the Best Workplace award from Great Place to Work 3 times in Finland,
                                        and
                                        once in all of
                                        Europe.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-services section-margin">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub">OUR SERVCIES</p>
                            </div>
                            <h2 class="title-main">New Branding Agency</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item">
                                    <div class="line-before"></div>
                                    <h4 class="subtitle">Brand Identity</h4>
                                    <p>As Vintage decided to have a closer look into fast-paced New York web design
                                        realm in person, we get to acquaint with most diverse and exceptionally
                                        captivating personalities. </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-item">
                                    <div class="line-before"></div>
                                    <h4 class="subtitle">Brand Identity</h4>
                                    <p>As Vintage decided to have a closer look into fast-paced New York web design
                                        realm in person, we get to acquaint with most diverse and exceptionally
                                        captivating personalities. </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-item">
                                    <div class="line-before"></div>
                                    <h4 class="subtitle">Brand Identity</h4>
                                    <p>As Vintage decided to have a closer look into fast-paced New York web design
                                        realm in person, we get to acquaint with most diverse and exceptionally
                                        captivating personalities. </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-item">
                                    <div class="line-before"></div>
                                    <h4 class="subtitle">Brand Identity</h4>
                                    <p>As Vintage decided to have a closer look into fast-paced New York web design
                                        realm in person, we get to acquaint with most diverse and exceptionally
                                        captivating personalities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-team section-margin section-padding">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub">our team</p>
                            </div>
                            <h2 class="title-main">The best team ever!</h2>
                        </div>

                        <div class="custom-container">
                            <div class="slick-slider">
                                @foreach($teams as $team)
                                    <div class="team-item slick-slide">
                                        <div class="box-img">
                                            <img src="{{asset($team->image)}}" alt="">
                                        </div>

                                        <div class="box-content">
                                            <h4>{{$team->name}}</h4>
                                            <p>{{$team->profession}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-client section-margin">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub"> Client see</p>
                            </div>
                            <h2 class="title-main">Feedback from our clients.</h2>
                        </div>

                        <div class="client-curs">
                            @foreach($feedback as $feed)
                                <div class="client-item">
                                    <div>
                                        <p>
                                            {!!$feed->feedback!!}
                                        </p>
                                        <h5>{{$feed->name}}</h5>
                                        <span>{{$feed->company}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="brand-client section-margin">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub">Our clients</p>
                            </div>
                            <h2 class="title-main">Your successful, our reputation</h2>
                        </div>

                        <div class="wapper-client">
                            @foreach($clients as $client)
                                <div class="logo-box">
                                    <img src="{{asset($client->logo)}}" alt="">

                                    <div class="info">
                                        <div class="content">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>

                                            <div class="entry">
                                                <div>
                                                    <h5>{{$client->client}}</h5>
                                                    <a href="{{$client->link}}">{{$client->link}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

            </div>

            {{--            <section class="contact-up section-margin section-padding">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="c-wapp">--}}
            {{--                        <a href="contact.html" class="effect-ajax">--}}
            {{--                                <span class="hiring">--}}
            {{--                                    We are hiring--}}
            {{--                                </span>--}}
            {{--                            <span class="career">--}}
            {{--                                    Dare and contact us immediately!--}}
            {{--                                </span>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </section>--}}

            <footer>
                <div class="info">
                    <div class="contact-footer">
                        <a href="tel:+37493852929" class="phone image-zoom" data-dsn="parallax">+(374)93 85-29-29</a>
                        <a href="tel:+37491852925" class="phone image-zoom" data-dsn="parallax">+(374)91 85-29-25</a>
                        <a href="mailto:info@nessa.am" class="email image-zoom" data-dsn="parallax">info@nessa.am</a>
                    </div>
                    <div class="copyright-social">
                        <p>© 2020 NESSA Design Studio</p>
                        <ul>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/nessadesignstudio/" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.instagram.com/nessa_art_/" target="_blank">Instagram</a></li>
                            <li class="image-zoom" data-dsn="parallax"><a href="https://www.facebook.com/profile.php?id=100010628236933" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection
