@extends('theme.master')
@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-md overlay overlay-show overlay-op-7" style="background-image: url(img/bg2.jpg); background-size: cover; background-position: center;">
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">								
                        <h1 class="text-light" style="font-size: 45px;">FA<strong>Qs</strong></h1>								
                    </div>							
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="examples" class="container py-2" style="margin-top: 50px">

            <div id="about" class="container py-3 my-5">
                <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="col">
                        <h2 class="text-10 font-weight-normal text-color-dark mb-4 line-height-4"><span class="text-color-primary font-weight-bold ">Why</span> iGuruweb?</h2>
                        <p class="text-color-dark">At iGuruWeb,we are a technological based company which specializes in the creation,development & re-selling of localized gaming contents,software development,iGaming consultancy services,business partnership. </p>
            
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-12 d-flex align-items-center justify-content-center justify-content-lg-start line-height-9">
                                <p class="text-color-dark mb-0">We come to the table as a partner rather than a service provider, combining our business acumen and entrepreneurial vision with amazing technical expertise and the ability to execute quickly and efficiently, taking your idea to market, at speed. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 pb-3">
                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Technology</h4>
                            <p class="card-text">We offer new generation slots games backed with the best technologies and techniques to ensure transparency, trust and reliability for customers as well as clients. Such technology includes a cryptographically secure Provably Fair</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Top Profit Slots Games</h4>
                            <p class="card-text">Each game is tailored to suit your business and assures remarkable profits. You will benefit from our extensive and vast experience working in the iGaming solutions industry</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Reliable Results</h4>
                            <p class="card-text">One of our core values is reliability. We act in your best interest to ensure effective results in securing long term and solid growth</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">White Label</h4>
                            <p class="card-text">We offer personalization and customization services that smoothly integrates your brand across all our games </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Mobile Responsiveness</h4>
                            <p class="card-text">We offer new generation slots games backed with the best technologies and techniques to ensure transparency, trust and reliability for customers as well as clients. Such technology includes a cryptographically secure Provably Fair</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card border-0 border-radius-0 bg-color-grey">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Online & Retail</h4>
                            <p class="card-text">In case you operate bricks and mortar shops, or online betting, lotto or casino sites, or both; we have the right cross-platform solution for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('theme.faq')
  
        @include('theme.contact')

    </div>

@endsection