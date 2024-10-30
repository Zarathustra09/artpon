@extends('layouts.artpon-app')

@section('content')
    <!-- About Section -->
    <section class="about-section mt-5">
        <div class="container pt-5">
            <div class="row g-5 align-items-center">
                <!-- Image Column -->
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="about-img position-relative">
                        <img src="frontend/images/janjan.jpg" class="img-fluid rounded shadow" alt="About Us Image">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="about-content">
                        <h1 class="display-5 mb-4 fw-bold">Trusted By 200+ satisfied clients</h1>
                        <blockquote class="mb-4 ps-3 border-start border-primary">
                            <p class="fst-italic">"Creativity takes courage. Being creative is not just about making art. It's about taking a moment to appreciate the world around you, seeing the beauty in everything, and embracing the joy of art-making."</p>
                            <footer class="text-muted">- Henri Matisse</footer>
                        </blockquote>

                        <!-- Features Grid -->
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-share text-primary me-2"></i>
                                    <span>Fast Delivery</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-share text-primary me-2"></i>
                                    <span>24/7 Customer Support</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-share text-primary me-2"></i>
                                    <span>100% Satisfaction</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-share text-primary me-2"></i>
                                    <span>4 Years Of Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section pt-5 bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="display-6 fw-bold">Our Services</h2>
                <div class="divider mx-auto my-4"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="service-item p-4 bg-white rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-paint-brush text-primary fa-2x me-3"></i>
                            <h5 class="mb-0">Paintings</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item p-4 bg-white rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-laptop-code text-primary fa-2x me-3"></i>
                            <h5 class="mb-0">Styrofoam Art Crafts</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item p-4 bg-white rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-drafting-compass text-primary fa-2x me-3"></i>
                            <h5 class="mb-0">Props</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item p-4 bg-white rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-bullhorn text-primary fa-2x me-3"></i>
                            <h5 class="mb-0">Costumes</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section pt-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="display-6 fw-bold">Testimonials</h2>
                <div class="divider mx-auto my-4"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="testimonial-item p-4 bg-light rounded shadow-sm">
                        <div class="testimonial-content">
                            <p class="mb-3 fst-italic">"Excellent service! Highly recommend for anyone looking for quality work."</p>
                            <p class="mb-0 fw-bold text-primary">- Mr. Rico Arpilleda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item p-4 bg-light rounded shadow-sm">
                        <div class="testimonial-content">
                            <p class="mb-3 fst-italic">"A wonderful experience from start to finish. Very professional."</p>
                            <p class="mb-0 fw-bold text-primary">- Mrs. Tina Tan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .divider {
            width: 60px;
            height: 3px;
            background-color: var(--bs-primary);
        }

        .service-item:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .testimonial-item {
            transition: all 0.3s ease;
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
    </style>
@endsection
