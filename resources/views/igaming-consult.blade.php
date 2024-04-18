@extends('theme.master')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-md overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">								
                        <h1 class="text-light" style="font-size: 40px;"><strong>Consulting</strong></h1>								
                    </div>							
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">iGaming Consulting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="about" class="container py-3 my-5">
            <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="col">
                    <h2 class="text-10 font-weight-normal text-color-dark mb-4 line-height-4 text-left"><span class="text-color-primary font-weight-bold ">iGaming </span> Consultancy</h2>
                    <p class="text-color-dark">We are also involved in promoting the sports betting and casino games market globally. We have fully driven the acquisition of the companies with gaming licenses in different countries globally also assisting the already existing sports betting operators to get both local and international investors, identifying and linking operator's to the best service providers globally, making research on the current market demands and evaluating customers contribution to the company's growth.</p>
                </div>
            </div>
        </div>

        @include('theme.services')

        @include('theme.contact')

    </div>

@endsection