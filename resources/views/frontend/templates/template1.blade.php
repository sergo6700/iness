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
                                <div class="bg-image cover-bg" data-overlay="0" data-dsn-ajax="img"
                                     data-image-src="{{asset($project->project_image)}}"></div>
                            </div>

                            <div class="container h-100">
                                <div id="dsn-hero-parallax-title" class="content-inner h-100">
                                    <div class="cat">
                                        <span>{{$project->category->name}}</span>
                                    </div>

                                    <div class="content">
                                        <div class="slider-header slider-header-top">
                                            <h1 data-dsn-animate="ajax">{{$project->project_title}}</h1>
                                        </div>
                                        <div id="dsn-hero-parallax-fill-title"
                                             class="slider-header slider-header-bottom">
                                            <h1 data-dsn-animate="ajax">{{$project->project_title}}</h1>
                                        </div>
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
                    <div class="intro-text text-center">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">
                            {{$project->project_title}}
                        </div>
                        <div class="inner">
                            {!! json_decode($project->data)->section_1_description !!}
                        </div>
                    </div>
                </div>

                <div class="box-seat">
                    <div class="dsn-v-text">
                        <div class="container-fluid">
                            <div class="box-middle-text">
                                <a href="{{json_decode($project->data)->section_1_video_link}}" class="vid">
                                    <div class="play-button">
                                        <div class="play-btn">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="inner-img" data-dsn-grid="move-up">
                                <img data-dsn-scale="1"
                                     src="{{asset(json_decode($project->data)->section_1_video_image[0])}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container intro-project section-p section-margin">
                    <div class="intro-text text-center">
                        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                             data-dsn-duration="170%" data-dsn-move="0%">{{$project->project_title}}
                        </div>
                        <div class="inner">
                            {!! json_decode($project->data)->section_2_description !!}
                        </div>
                    </div>
                </div>

                <div class="container-fluid slider-project section-margin">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach(json_decode($project->data)->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{asset($image)}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="slider-button-prev">
                        <div>
                            <svg viewBox="0 0 40 40">
                                <polyline class="path" points="25.4 22.55 20 17.15 14.6 22.55"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="slider-button-next">
                        <div>
                            <svg viewBox="0 0 40 40">
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
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
