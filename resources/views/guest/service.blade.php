@extends('layouts.app')



@section('content')
        <!-- About Start -->
        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="frontend/images/janjan.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <br>
                        <h1 class="display-5 mb-4">Trusted By 200+ satisfied clients</h1>
                        <p class="mb-4">"Creativity takes courage. Being creative is not just about making art. It’s about taking a moment to appreciate the world around you, seeing the beauty in everything, and embracing the joy of art-making." <br> - Henri Matisse</p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Fast Delivery
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>100% Satisfaction
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>4 Years Of Experience
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Section -->
        <section class="services-list">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 service-item">
                        <i class="fas fa-paint-brush"></i>
                        <span>Paintings</span>
                    </div>
                    <div class="col-lg-6 service-item">
                        <i class="fas fa-laptop-code"></i>
                        <span>Styrofoam Art Crafts</span>
                    </div>
                    <div class="col-lg-6 service-item">
                        <i class="fas fa-drafting-compass"></i>
                        <span>Props</span>
                    </div>
                    <div class="col-lg-6 service-item">
                        <i class="fas fa-bullhorn"></i>
                        <span>Costumes</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="section-title">
                <h2>Testimonials</h2>
            </div>
            <div class="container">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Excellent service! Highly recommend for anyone looking for quality work."</p>
                        <p>- Mr. Rico Arpilleda</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"A wonderful experience from start to finish. Very professional."</p>
                        <p>- Mrs. Tina Tan</p>
                    </div>
                </div>
            </div>
        </section>

@endsection
