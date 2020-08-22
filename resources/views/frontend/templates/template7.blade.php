@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="fullscreen-slider">
                <div class="swiper-container" data-dsn-header="project">
                    <div id="descover-holder" class="descover-holder">
                        <span class="letter">discover</span>
                        <div class="scroll-down__line">
                            <span></span>
                        </div>
                        <span class="letter">scroll to</span>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="slider-item swiper-slide">
                            <div class="bg parallax-move-element" id="dsn-hero-parallax-img">
                                <div class="bg-image cover-bg" data-overlay="2" data-dsn-ajax="img"
                                     data-image-src="{{asset($project->project_image)}}"></div>
                            </div>

                            <div class="container h-100">
                                <div id="dsn-hero-parallax-title" class="content-inner h-100">
                                    <div class="content">
                                        <div class="slider-header slider-header-top">
                                            <h1 data-dsn-animate="ajax">{{$project->project_title}}</h1>
                                        </div>
                                        <div id="dsn-hero-parallax-fill-title"
                                             class="slider-header slider-header-bottom">
                                            <h1 data-dsn-animate="ajax">{{$project->project_title}}</h1>
                                        </div>
                                    </div>
                                    <div class="slider-descr">
                                        <h5 data-dsn-animate="ajax"><strong>Published</strong>
                                        </h5>
                                        <span>- {{$project->created_at->format('Y-m-d')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-project">
                <div class="container intro-project section-margin">
                    <div class="intro-text">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            {{$project->project_title}}
                        </div>
                        <div class="inner">
                            <h2 data-dsn-animate="text">A whole new brand</h2>
                            <p data-dsn-animate="up">
                                {!! json_decode($project->data)->section_1_description !!}
                            </p>
                            <a class="bottom-link" data-dsn-animate="up"
                               href="{{json_decode($project->data)->link}}" target="_blank">
                                <span></span>
                                <span></span>
                                <div class="content">
                                    <div class="inner">
                                        <p>VISIT SITE</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up">
                        <img src="{{asset(json_decode($project->data)->section_1_image[0])}}" alt="">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>

                <div class="container-fluid section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                        <img src="{{asset(json_decode($project->data)->section_2_image[0])}}" alt="" data-dsn-y="30%" data-dsn-scale="1.08">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>

                <div class="container intro-project section-p section-margin">
                    <div class="intro-text text-center">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            {{$project->project_title}}
                        </div>
                        <div class="inner">
                            <h2 data-dsn-animate="text">
                                {!! json_decode($project->data)->section_3_description !!}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="container section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up">
                        <img src="{{asset(json_decode($project->data)->section_3_images[0])}}" alt="">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>

                <div class="container-fluid section-margin">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                        <img src="{{asset(json_decode($project->data)->section_4_images[0])}}" alt="" data-dsn-y="30%" data-dsn-scale="1.08">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>

            </div>

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
