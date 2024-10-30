@extends('layouts.artpon-app')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="p-5 bg-light rounded contact-form">
                <div class="row g-4">
                    <div class="col-12">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                        <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <form method="post" action="">
                            @csrf
                            <input type="text" name="name" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name" aria-label="Your Name">
                            <input type="email" name="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email" aria-label="Your Email">
                            <textarea name="message" class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message" aria-label="Your Message"></textarea>
                            <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Address</h4>
                                    <p>Purok PAGASA, Capitol Rd. Surigao City, Surigao Del Norte, Philippines</p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Email</h4>
                                    <p class="mb-2">jcarloarpon@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Contact Number</h4>
                                    <p class="mb-2">(+639)954431631</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Section Start -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="mb-4">Our Location</h2>
                        <div class="map-container rounded border border-primary">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039331.82557527!2d120.66005689797016!3d11.957082148598637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330136cdfcf0f96b%3A0x9e850e51cdbc5166!2s5008%20Maharlika%20Hwy%2C%20Surigao%20City%2C%20Surigao%20del%20Norte!5e1!3m2!1sen!2sph!4v1730203539432!5m2!1sen!2sph"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                <!-- Map Section End -->
                <!-- FAQ Section -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item border border-primary rounded mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can I book a service?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can book a service by visiting our booking page and filling out the required details.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-primary rounded mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We accept various payment methods including credit/debit cards and bank transfers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-primary rounded">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do I get a refund?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        To request a refund, please contact our support team with your booking details and reason for the refund.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <style>
        /* Map Container Styles */
        .map-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Accordion Styles */
        .accordion-button:not(.collapsed) {
            background-color: #ee5353;
            color: #fff;
        }

        .accordion-button:focus {
            border-color: #ee5353;
            box-shadow: 0 0 0 0.25rem rgba(238, 83, 83, 0.25);
        }

        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ee5353'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
    </style>
@endsection
