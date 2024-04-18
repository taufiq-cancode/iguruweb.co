@extends('theme.master')
@section('content')

    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-bottom nav-inside nav-style-2 nav-light nav-font-size-sm show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['800px','800px','800px','550px','500px']" style="height: 800px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-7" style="background-image: url(img/bg1.jpg); background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row align-items-center align-items-md-end justify-content-center justify-content-md-start h-100">
                                <div class="col-sm-10 col-md-6 col-lg-5 offset-md-6 text-center text-md-start ps-md-5 pb-md-5 pt-5 pt-md-0 mt-5 mt-md-0">
                                    <h1 class="text-color-light font-weight-extra-bold text-9 text-lg-10 line-height-1 pe-lg-5 mb-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" data-appear-animation-duration="500ms" data-plugin-options="{'minWindowWidth': 0}">Welcome to iGuruWeb</h1>
                                    <p class="text-4 text-color-light font-weight-light opacity-7 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 600, 'minWindowWidth': 0, 'animationSpeed': 50}">A Leading iGaming Guru!</p>
                                    <a href="#" class="btn btn-dark btn-modern font-weight-bold text-2 py-3 px-5 mt-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 right-0 w-50pct z-index-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-plugin-options="{'minWindowWidth': 0}">
                            <div class="d-none d-md-block bg-primary opacity-9" data-dynamic-height="['385px','385px','385px','385px','385px']" style="height: 385px;"></div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row align-items-center align-items-md-end justify-content-center justify-content-md-start h-100">
                                <div class="col-sm-10 col-md-6 col-lg-5 offset-md-6 text-center text-md-start ps-md-5 pb-md-5 pt-5 pt-md-0 mt-5 mt-md-0">
                                    <h1 class="text-color-light font-weight-extra-bold text-9 text-lg-10 line-height-1 pe-lg-5 mb-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" data-appear-animation-duration="500ms" data-plugin-options="{'minWindowWidth': 0}">We offer</h1>
                                    <p class="text-4 text-color-light font-weight-light opacity-7 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 600, 'minWindowWidth': 0, 'animationSpeed': 50}">Games Creation & Development | iGaming Consulting & Patnership</p>
                                    <a href="#" class="btn btn-dark btn-modern font-weight-bold text-2 py-3 px-5 mt-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 right-0 w-50pct z-index-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-plugin-options="{'minWindowWidth': 0}">
                            <div class="d-none d-md-block bg-primary opacity-9" data-dynamic-height="['385px','385px','385px','385px','385px']" style="height: 385px;"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav ps-md-5 ms-md-5">
                <button type="button" role="presentation" class="owl-prev ms-md-4"></button>
                <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
            </div>
        </div>

        @include('theme.about')

        @include('theme.services')
        
        @include('theme.team')

        @include('theme.faq')

        @include('theme.contact')
    </div>

@endsection