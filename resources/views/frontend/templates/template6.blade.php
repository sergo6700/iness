@extends('layouts.app')
@section('main')
    <div id="dsn-scrollbar">
        <header>
            <div class="headefr-fexid" data-dsn-header="project">
                <div class="bg w-100" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                    <div class="bg-image cover-bg"
                         data-overlay="5"
                         data-image-src="{{asset($project->project_image)}}">
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
                @foreach(json_decode($project->data)->images as $image)
                <div class="container-fluid">
                    <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
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
