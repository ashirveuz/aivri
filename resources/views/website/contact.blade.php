@extends('website.layouts.app')
@section('content')
    <section class="inner-banner-out">
        <div class="inner_banner">
            <div class="inner_banner-img">
                <img src="{{ file_exists(public_path('storage/' . $contact->banner_image)) ? asset('storage/' . $contact->banner_image) : asset('assets/img/no_image.jpg') }}"
                    class="img-fluid" alt="{{ $contact->banner_image_alt }}">
            </div>
            <div class="width-container">
                <div class="inner-banner-cont">
                    <h2>Contact Us</h2>
                    <div class="inner-banner-dtls">
                        <a href="{{ route('website.home') }}"> <span> Home </span></a> <span> / </span> <span>
                            {{ $contact->banner_heading }} </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="common-section contact-out">
        <div class="width-container">
            <div class="contact-inner">

                <!-- help center -->
                <div class="help-center">
                    {!! $contact->description !!}
                </div>

                <!-- contact form -->
                <div class="contact-details">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="contact-info h-100">
                                <h3 class="mb-2">Get in touch</h3>
                                <p class="mb-4">We'd love to hear from you. Please fill out the form or contact us using
                                    the information below.</p>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-adress">
                                        <h5 class="mb-0">Address</h5>
                                        <p class="mb-0">{{ $contact->address }}</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-phone">
                                        <h5 class="mb-0">Phone</h5>
                                        <p class="mb-0">{{ $contact->phone }}</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-mail">
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">{{ $contact->email }}</p>
                                    </div>
                                </div>

                                <div class="social-links">
                                    <h5 class="mb-3">Follow Us</h5>
                                    <a href="{{ $contact->facebook }}" class="social-icon"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $contact->twitter }}" class="social-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $contact->linkedin }}" class="social-icon"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $contact->instagram }}" class="social-icon"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        @livewire('enquiry-form')
                    </div>
                </div>

                <!-- faq -->
                <div class="faq">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="faq-heading">
                                <h2 class="mb-4">Frequently Asked<br><span>Questions</span></h2>
                            </div>
                        </div>
                        <div class="col-md-8 qanswer">
                            <div class="accordion" id="faqAccordion">
                                @foreach ($questions as $key => $question)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="{{ '#faq' . $key }}"
                                                aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                                aria-controls="{{ 'faq' . $key }}">
                                                {{ $question->question }}
                                            </button>
                                        </h2>
                                        <div id="{{ 'faq' . $key }}"
                                            class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                {!! $question->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
