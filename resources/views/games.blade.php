@extends('theme.master')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-md overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">								
                        <h1 class="text-light" style="font-size: 45px;">Games we <strong>provide</strong></h1>								
                    </div>							
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Our Games</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
        <div id="examples" class="container py-2" style="margin-top: 50px">
            <div class="row mb-5 pb-3">
                            
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/Alligator/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Alligator</h4>
                                <a href="{{ asset('games/Alligator/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/Pharaoh/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Pharaoh</h4>
                                <a href="{{ asset('games/Pharaoh/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/Himalaya/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Himalaya</h4>
                                <a href="{{ asset('games/Himalaya/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                    
                
            </div>

            <div class="row mb-5 pb-3">
                            
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/AliceInWonderland/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Alice in the Wonderland</h4>
                                <a href="{{ asset('games/AliceInWonderland/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/TombsOfVampires/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Vampire</h4>
                                <a href="{{ asset('games/TombsOfVampires/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="{{ asset('games/Roulette_Test/index.html') }}" >
                        <div class="card">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Roulette</h4>
                                <a href="{{ asset('games/Roulette_Test/index.html') }}" class="read-more text-color-primary font-weight-semibold text-2">Get started <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        @include('theme.contact')

    </div>

@endsection