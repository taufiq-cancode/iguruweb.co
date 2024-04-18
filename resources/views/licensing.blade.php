@extends('theme.master')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-md overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">								
                        <h1 class="text-light" style="font-size: 30px;">License <strong>Acquisition</strong></h1>								
                    </div>							
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Licensing Acquisition Across Various Geos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="about" class="container py-3 my-5">
            <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="col">
                    <h2 class="text-10 font-weight-normal text-color-dark mb-4 line-height-4 text-left"><span class="text-color-primary font-weight-bold ">Licensing Acquisition </span> Across Various Geos</h2>
                    <p class="text-color-dark">We can help you approach the investors who have intention of penetrating the African market in order for them to be equipped with the information needed. If you need anything involving sports betting,casino lottery, gaming licenses, gaming investment, operation management, certificates e.t.c then look no further because we are a click away!</p>
                </div>
            </div>
        </div>

        @include('theme.services')

        @include('theme.contact')

    </div>

@endsection