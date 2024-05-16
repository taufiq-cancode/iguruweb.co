@extends('theme.master')
@section('content')

<style>
    ul {
        padding-left: 17px;
    }
</style>

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
                    <div class="card">
                        <a href="{{ asset('games/Alligator/index.html') }}" target="_blank">
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="{{ asset('games/Alligator/index.html') }}" target="_blank">Alligator Chomp</a>
                            </h4>
                            <p>Sometimes eyes will open and close in the water and the surface of the water moves. With higher winnings, alligators show up from the bushes near the water and run into it. In the water there may be wrecks of human vehicles.</p>
                            <p><b>Animations:</b> Sandstorm and Raising Sun</p>
                            <ul>
                                <li><b>Rows: 4</b></li>
                                <li><b>Reels: 5</b></li>
                                <li><b>Paylines: 15</b></li>
                            </ul>
                            <ul>
                                <li>Free Spins</li>
                                <li>Scatter</li>
                                <li>Wild</li>
                                <li>Anticipation</li>
                                <li>Jackpot</li>
                                <li>Friend jackpot in multiplayer mode</li>
                            </ul>
                            <a href="{{ asset('games/Alligator/index.html') }}" target="_blank" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <a href="{{ asset('games/Pharaoh/index.html') }}" target="_blank">
                            <img class="card-img-top" src="{{ asset('img/games-banner/Pharao_banner.jpg') }}" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="{{ asset('games/Pharaoh/index.html') }}" target="_blank">Pharoah</a>
                            </h4>
                            <p>There will be a pyramid in the background and when the player gets higher winnings the background moves into the chamber of the Pharaoh, where treasures lie. The setting could change when the player reaches a higher multiplier. </p>
                            <p><b>Animations:</b> Sandstorm and Raising Sun</p>
                            <ul>
                                <li><b>Rows: 4</b></li>
                                <li><b>Reels: 5</b></li>
                                <li><b>Paylines: 15</b></li>
                            </ul>
                            <ul>
                                <li>Free Spins</li>
                                <li>Scatter</li>
                                <li>Wild</li>
                                <li>Anticipation</li>
                                <li>Jackpot</li>
                                <li>Friend jackpot in multiplayer mode</li>
                            </ul>
                            <a href="{{ asset('games/Pharaoh/index.html') }}" target="_blank" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <a href="{{ asset('games/Himalaya/index.html') }}" target="_blank">
                            <img class="card-img-top" src="{{ asset('img/games-banner/Himalayas_banner.jpg') }}" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="{{ asset('games/Himalaya/index.html') }}" target="_blank">Mysteries of Himalayas</a>
                            </h4>
                            <p>The background will be a giant mountain with snow, when the player gets high win, the mountaintop will get closer and snow will fall with wind blowing.</p>
                            <p>There are many mystical items, in the depth of the cold caves in the high mountains. Also there are some wild animals.</p>
                            <p><b>Frozen slots:</b> If you are not playing continuously, some columns can freeze, and stop.</p>
                            <ul>
                                <li><b>Rows: 5</b></li>
                                <li><b>Reels: 4</b></li>
                                <li><b>Paylines: 15</b></li>
                            </ul>
                            <ul>
                                <li>Free Spins</li>
                                <li>Scatter</li>
                                <li>Wild</li>
                                <li>Anticipation</li>
                                <li>Jackpot</li>
                                <li>Friend jackpot in multiplayer mode</li>
                            </ul>
                            <a href="{{ asset('games/Himalaya/index.html') }}" target="_blank" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 pb-3">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <a href="#" >
                            <img class="card-img-top" src="img/bg2.jpg" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="#" >Blood Moon</a>
                            </h4>
                            <p>when bonus has been filled up. Scene transform into boold moon appearance, and pay more. No WILD in blood moon.</p>
                            <ul>
                                <li>Free Spins</li>
                                <li>Scatter</li>
                                <li>Wild</li>
                                <li>Anticipation</li>
                                <li>Jackpot</li>
                                <li>Friend jackpot in multiplayer mode</li>
                            </ul>
                            <a href="#" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <a href="{{ asset('games/AliceInWonderland/index.html') }}" target="_blank">
                            <img class="card-img-top" src="{{ asset('img/games-banner/AliceinWonderland_banner.jpg') }}" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="{{ asset('games/AliceInWonderland/index.html') }}" target="_blank">Alice in the Wonderland</a>
                            </h4>
                            <ul>
                                <li><b>Rows: 4</b></li>
                                <li><b>Reels: 5</b></li>
                                <li><b>Paylines: 15</b></li>
                            </ul>
                            <ul>
                                <li>Free Spins</li>
                                <li>Scatter</li>
                                <li>Wild</li>
                                <li>Anticipation</li>
                                <li>Jackpot</li>
                                <li>Friend jackpot in multiplayer mode</li>
                            </ul>
                            <a href="{{ asset('games/AliceInWonderland/index.html') }}" target="_blank" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <a href="{{ asset('games/TombsOfVampires/index.html') }}" target="_blank">
                            <img class="card-img-top" src="{{ asset('img/games-banner/TombOfVampires_banner.jpg') }}" alt="Card Image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">
                                <a href="{{ asset('games/TombsOfVampires/index.html') }}" target="_blank">Tombs of Vampires</a>
                            </h4>
                            <ul>
                                <li><b>Rows: 3</b></li>
                                <li><b>Reels: 3</b></li>
                                <li><b>Paylines: 3</b></li>
                            </ul>
                            <a href="{{ asset('games/TombsOfVampires/index.html') }}" target="_blank" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 pb-3">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card"><a href="https://iguruweb.co/games/Roulette_Test/index.html">
                        <a href="https://iguruweb.co/games/Roulette_Test/index.html" target="_blank">
                            <img class="card-img-top" src="{{ asset('img/games-banner/roulette_banner.jpg') }}" alt="Card Image">
                        </a>
                        </a><div class="card-body"><a href="https://iguruweb.co/games/Roulette_Test/index.html">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Roulette</h4>
                            </a><a href="https://iguruweb.co/games/Roulette_Test/index.html" class="read-more text-color-primary font-weight-semibold text-2">View Game <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('theme.contact')

    </div>

@endsection