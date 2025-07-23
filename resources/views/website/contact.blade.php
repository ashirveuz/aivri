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
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            What is your return policy?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We offer a 30-day return policy for all unused items in their original
                                            packaging.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            How long does shipping take?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Shipping typically takes 3-5 business days for domestic orders and 7-14 days for
                                            international orders.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Do you offer international shipping?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, we ship to most countries worldwide. Shipping costs and delivery times may
                                            vary
                                            depending on the destination.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                            How can I track my order?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once your order ships, you'll receive a tracking number via email. You can use
                                            this
                                            number to track your package on our website or the carrier's site.
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
