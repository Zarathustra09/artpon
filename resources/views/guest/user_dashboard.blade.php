@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-5 font-weight-bold">Product Categories</h2>

        {{-- Styrofoam Arts Category --}}
        <div class="category-section mb-5">
            <h3 class="text-center font-weight-bold">Styrofoam Arts</h3>
            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('frontend/images/styronames.jpg') }}" class="card-img-top rounded" alt="Styrofoam Art">
                        <div class="card-body text-center">
                            <h5 class="card-title">Premium StyroNames</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('gallery/styroarts/customized.jfif') }}" class="card-img-top rounded" alt="Styrofoam Art">
                        <div class="card-body text-center">
                            <h5 class="card-title">Customized Styrofoam Sculpture</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('gallery/styroarts/decorative.jfif') }}" class="card-img-top rounded" alt="Styrofoam Art">
                        <div class="card-body text-center">
                            <h5 class="card-title">Decorative Styrofoam Art</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>
                {{-- Add more styrofoam products here if available --}}
            </div>


        </div>



        {{-- Props Category --}}
        <div class="category-section mb-5">
            <h3 class="text-center font-weight-bold">Props</h3>
            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('frontend/images/logos.jpg') }}" class="card-img-top rounded" alt="Props">
                        <div class="card-body text-center">
                            <h5 class="card-title">Logos</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('gallery/props/themed.jfif') }}" class="card-img-top rounded" alt="Props">
                        <div class="card-body text-center">
                            <h5 class="card-title">Themed-Event Props</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('gallery/props/stage.jfif') }}" class="card-img-top rounded" alt="Props">
                        <div class="card-body text-center">
                            <h5 class="card-title">Stage Props</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>
                {{-- Add more props here if available --}}
            </div>
        </div>



        {{-- Backdrops Category --}}
        <div class="category-section mb-5">
            <h3 class="text-center font-weight-bold">Backdrops</h3>
            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('frontend/images/backdrop.jpg') }}" class="card-img-top rounded" alt="Backdrop">
                        <div class="card-body text-center">
                            <h5 class="card-title">BackDrops</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>
                {{-- Add more backdrops here if available --}}
            </div>
        </div>
        {{-- Paintings Category --}}
        <div class="category-section mb-5">
            <h3 class="text-center font-weight-bold">Paintings</h3>
            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card border-0 shadow-sm">
                        <img src="{{ asset('frontend/images/painting.jpg') }}" class="card-img-top rounded" alt="Painting">
                        <div class="card-body text-center">
                            <h5 class="card-title">Paintings</h5>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                        </div>
                    </div>
                </div>
                {{-- Add more paintings here if available --}}
            </div>
        </div>
    </div>

    {{-- Costumes Category --}}
    <div class="category-section mb-5">
        <h3 class="text-center font-weight-bold">Costumes</h3>
        <div class="row g-4 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="card product-card border-0 shadow-sm">
                    <img src="{{ asset('frontend/images/snowite.jpg') }}" class="card-img-top rounded" alt="Costume">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cartoon Characters</h5>
                        <a href="{{ route('booking.index') }}" class="btn btn-outline-primary btn-sm">Book Now!</a>
                    </div>
                </div>
            </div>
            {{-- Add more costumes here if available --}}
        </div>
    </div>

    <style>
        .category-section {
            margin-bottom: 2rem;
        }
        .product-card {
            transition: transform 0.3s ease-in-out;
        }
        .product-card:hover {
            transform: translateY(-10px);
        }
        .product-card img {
            transition: opacity 0.3s ease-in-out;
        }
        .product-card:hover img {
            opacity: 0.9;
        }
        .product-card .card-body {
            padding: 1rem;
        }
        .product-card .btn {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
        }
    </style>
@endsection
