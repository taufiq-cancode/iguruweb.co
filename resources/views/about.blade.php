@extends('theme.master')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-md overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">								
                        <h1 class="text-light" style="font-size: 45px;">About <strong>Us</strong></h1>								
                    </div>							
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
     
        @include('theme.about')

        @include('theme.services')
        
        @include('theme.team')

        @include('theme.faq')

        @include('theme.contact')

    </div>

@endsection