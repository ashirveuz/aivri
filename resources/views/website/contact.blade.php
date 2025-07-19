@extends('website.layouts.app')
@section('content')
    <section class="inner-banner-out">
        <div class="inner_banner">
            <div class="inner_banner-img">
                <img src="assets/img/inner-banner.webp" class="img-fluid" alt="">
            </div>
            <div class="width-container">
                <div class="inner-banner-cont">
                    <h2>Contact Us</h2>
                    <div class="inner-banner-dtls">
                        <a href="index.html"> <span> Home </span></a> <span> / </span> <span> Contact Us </span>
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
                    <h5>Aivri Help Center | 24x7 Customer Care Support</h5>
                    <p>
                        The Aivri Help Centre page lists out various types of issues that you may have encountered so
                        that there can be quick resolution and you can go back to shopping online. For example, you
                        can get more information regarding order tracking, delivery date changes, help with returns
                        (and refunds), and much more. The Aivri Help Centre also lists out more information that you
                        may need regarding Aivri Plus, payment, shopping, and more. The page has various filters
                        listed out on the left-hand side so that you can get your queries solved quickly, efficiently,
                        and without a hassle. You can get the Aivri Help Centre number or even access Aivri Help
                        Centre support if you need professional help regarding various topics. The support executive
                        will ensure speedy assistance so that your shopping experience is positive and enjoyable.
                        You can even inform your loved ones of the support page so that they can properly get their
                        grievances addressed as well. Once you have all your queries addressed, you can pull out your
                        shopping list and shop for all your essentials in one place. You can shop during festive sales
                        to get your hands on some unbelievable deals online. This information is updated on 17-Jul-25
                    </p>
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
                                        <p class="mb-0">UAE Business Avenue, Suite 100<br>Saudi Arabia, UAE 150124</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-phone">
                                        <h5 class="mb-0">Phone</h5>
                                        <p class="mb-0">+1 (555) 123-4567</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-mail">
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">contact@company.com</p>
                                    </div>
                                </div>

                                <div class="social-links">
                                    <h5 class="mb-3">Follow Us</h5>
                                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="contact-form">
                                <h3 class="mb-4">Send us a message</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="John">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Doe">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="john@example.com">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" placeholder="How can we help?">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="5" placeholder="Your message here..."></textarea>
                                    </div>

                                    <button type="submit" class="btn main-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            How long does shipping take?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Shipping typically takes 3-5 business days for domestic orders and 7-14 days for
                                            international orders.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            Do you offer international shipping?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, we ship to most countries worldwide. Shipping costs and delivery times may
                                            vary
                                            depending on the destination.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
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
