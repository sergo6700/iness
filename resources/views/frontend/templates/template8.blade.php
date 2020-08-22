@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="headefr-fexid" data-dsn-header="project">
                <div class="bg has-top-bottom" id="dsn-hero-parallax-img">
                    <div class=" " data-dsn="video" data-overlay="4" data-dsn-ajax="img">
                        <video class="image-bg cover-bg dsn-video" poster="{{asset(json_decode($project->data)->project_video[0])}}" autoplay loop
                               muted>
                            <source src="{{asset(json_decode($project->data)->project_video[0])}}" type="video/mp4"
                                    type="video/mp4">
                            <source src="{{asset(json_decode($project->data)->project_video[0])}}" type="video/webm">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>

                <div class="scroll" data-dsn-animate="ajax">
                    <span class="background"></span>
                    <span class="triangle"></span>
                </div>
                <div class="project-title" id="dsn-hero-parallax-title">

                    <div class="title-text-header">
                        <div class="cat">
                            <span>{{$project->category->name}}</span>
                        </div>
                        <span class="title-text-header-inner">
                                <span data-dsn-animate="ajax">{{$project->project_title}}</span>
                            </span>
                    </div>

                    <div class="sub-text-header" data-dsn-animate="ajax">
                        <h5>Published</h5>
                        <span>- {{$project->created_at->format('Y-m-d')}}</span>
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
                            <h2 data-dsn-animate="text">Toast Reel</h2>
                            <p data-dsn-animate="up">
                                {!! $project->project_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                @foreach(json_decode($project->data)->images as $image)
                <div class="container-fluid">
                    <div class="img-box-small dsn-parallax-full" style="height: 103vh;" data-dsn-grid="move-up"
                         data-dsn-triggerhook="0">
                        <img src="{{asset($image)}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                        <div class="cap">
                            <span>{{$project->category->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container-fluid section-margin mt-0">
            </div>

            <footer class="mt-5">
                <div class="info">
                    <div class="contact-footer">
                        <a href="tel:+37493852929" class="phone image-zoom" data-dsn="parallax">+374(93) 85-29-29</a>
                        <a href="mailto:info@nessa.am" class="email image-zoom" data-dsn="parallax">info@nessa.am</a>
                    </div>
                    <div class="copyright-social">
                        <p>© 2020 Nessa Design Studio</p>
                        <ul>
                            <li class="image-zoom" data-dsn="parallax"><a
                                    href="https://www.facebook.com/profile.php?id=100010628236933" target="_blank">Facebook</a>
                            </li>
                            <li class="image-zoom" data-dsn="parallax"><a
                                    href="https://www.instagram.com/nessadesignstudio/?hl=ru"
                                    target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

        </div>
    </div>
@endsection
