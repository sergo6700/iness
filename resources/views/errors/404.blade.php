@extends('layouts.app')
@section('main')
    <div class="dsn-slider" data-dsn-header="project">
        <div class="slide-inner">
            <div class="swiper-wrapper">
                <div class="image-container">
                    <div class="image-bg"
                         data-overlay="0">
                        <img src="{{asset('img/404.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
