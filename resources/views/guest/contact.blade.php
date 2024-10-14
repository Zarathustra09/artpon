@extends('layouts.app')



@section('content')
    <!-- Content -->


        <!-- Notification Box -->
        <div class="box" id="notificationsBox">
            <div class="box-header">Notifications</div>
            <div class="box-body">
                <p>No new notifications.</p>
            </div>
        </div>

        <!-- Settings Box -->
        <div class="box" id="settingsBox">
            <div class="box-header">Settings</div>
            <div class="box-body">
                <p>Settings content here.</p>
            </div>
        </div>

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
                    <!-- New Feature Start -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="mb-4">Our Location</h2>
                            <div id="map" class="w-100" style="height: 400px; background-color: #eee;"></div>
                        </div>
                        <div class="col-12 mt-5">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How can I book a service?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            You can book a service by visiting our booking page and filling out the required details.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What payment methods do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We accept various payment methods including credit/debit cards and bank transfers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                    <!-- New Feature End -->
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection
