@extends('website.layouts.app')
@section('content')
    <section class="inner-banner-out">
        <div class="inner_banner">
            <div class="inner_banner-img">
                <img src="{{ file_exists(public_path('storage/' . $about->banner_image)) ? asset('storage/' . $about->banner_image) : asset('assets/img/no_image.jpg') }}"
                    class="img-fluid" alt="{{ $about->banner_image_alt }}">
            </div>
            <div class="width-container">
                <div class="inner-banner-cont">
                    <h2>About Us</h2>
                    <div class="inner-banner-dtls">
                        <a href="{{ route('website.home') }}"><span> Home </span></a><span> / </span><span>
                            {{ $about->banner_heading }} </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mkp-products common-section">
        <div class="width-container">
            <div class="mkp-products-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 right-mkp-products-item">
                        <div class="mkp-products-item">
                            <h3>{{ $about->heading }}</h3>
                            <div class="bottom-border1"></div>
                            <p>
                                {{ $about->description }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 left-mkp-products-item">
                        <div class="mkp-products-item-bg about-page-img">
                            <img src="{{ file_exists(public_path('storage/' . $about->image)) ? asset('storage/' . $about->image) : asset('assets/img/no_image.jpg') }}"
                                class="img-fluid" alt="{{ $about->image_alt }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="common-section vsion-mission">
        <div class="width-container">
            <div class="row justify-content-center g-0">
                <div class="col-md-4">
                    <div class="mvv-box mission">
                        <img src="assets/img/mission.png" alt="Mission">
                        <h2>OUR MISSION</h2>
                        <p>{!! $about->mission !!}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mvv-box vision">
                        <img src="assets/img/targeting.png" alt="Mission">
                        <h2>OUR VISION</h2>
                        <p>{!! $about->vision !!}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mvv-box values">
                        <img src="assets/img/customer.png" alt="Mission">
                        <h2>OUR VALUES</h2>
                        <p>{!! $about->our_values !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="common-section pb-0 abt-page-out">
        <div class="width-container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="second-card">
                        <div class="message-qoutes message-qoutes2">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-8 right-ceo-message">
                                <div class="right-ceo-message-cont">
                                    <p>
                                        {{ $about->founder_description }}
                                    </p>
                                    <div class="ceo-message-small">
                                        <h4>{{ $about->founder_name }}</h4>
                                        <h6>{{ $about->founder_professional_title }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 left-ceo-message">
                                <div class="left-ceo-message-img">
                                    <img src="{{ file_exists(public_path('storage/' . $about->founder_image)) ? asset('storage/' . $about->founder_image) : asset('assets/img/no_image.jpg') }}"
                                        class="img-fluid" alt="{{ $about->founder_image_alt }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="app-testim">
        <div class="width-container">
            <div class="pr-testim">
                <div class="row">
                    <div class="col-md-6 app-content-out">
                        <div class="app-content">
                            <div class="app-content-img">
                                <img src="assets/img/app-small-bg.png" class="img-fluid" alt="aivri">
                            </div>
                            <div class="app-content-dtls">
                                <h3>Get <span> Aivri </span> App</h3>
                                <p>Available for iOS and Android</p>
                                <div class="app-download-in">
                                    <div class="app-gplay">
                                        <a href="#">
                                            <img src="assets/img/gplay.png" class="img-fluid" alt="aivri">
                                        </a>
                                    </div>
                                    <div class="app-download">
                                        <a href="#">
                                            <img src="assets/img/download.png" class="img-fluid" alt="aivri">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 testim-out">
                        <div class="testim-inner">

                            <div class="carousel-wrap">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <h3>Testimonials </h3>
                                        <p>
                                            “For all your printing prerequisites. Offer to make
                                            and print their pamphlets, business cards,
                                            solicitations, and occasion programs.”
                                        </p>
                                        <div class="testim-dtls">
                                            <div class="testim-img">
                                                <img src="assets/img/tesim-person.png" class="img-fluid" alt="aivri">
                                            </div>
                                            <div class="testim-img-cont">
                                                <h6>Eddy M. </h6>
                                                <p>Designer at Lift</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3>Testimonials </h3>
                                        <p>
                                            “For all your printing prerequisites. Offer to make
                                            and print their pamphlets, business cards,
                                            solicitations, and occasion programs.”
                                        </p>
                                        <div class="testim-dtls">
                                            <div class="testim-img">
                                                <img src="assets/img/tesim-person.png" class="img-fluid" alt="aivri">
                                            </div>
                                            <div class="testim-img-cont">
                                                <h6>Eddy M. </h6>
                                                <p>Designer at Lift</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h3>Testimonials </h3>
                                        <p>
                                            “For all your printing prerequisites. Offer to make
                                            and print their pamphlets, business cards,
                                            solicitations, and occasion programs.”
                                        </p>
                                        <div class="testim-dtls">
                                            <div class="testim-img">
                                                <img src="assets/img/tesim-person.png" class="img-fluid" alt="aivri">
                                            </div>
                                            <div class="testim-img-cont">
                                                <h6>Eddy M. </h6>
                                                <p>Designer at Lift</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
