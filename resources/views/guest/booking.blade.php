@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="container-fluid bg-light py-3 my-3 mt-0">
        <div class="container text-center">
            <h1 class="display-4 mb-2">Booking</h1>
        </div>
    </div>

    <!-- Combined Order Customization and Booking Form Start -->
    <div class="container my-5">
        <p class="text-center">Customize Your Order</p>
        <div class="order-form">
            <form id="bookingForm" action="{{ route('booking.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="service">Select Service:</label>
                    <select class="form-control" id="service" name="service" required>
                        <option selected disabled>---</option>
                        <option value="Styrofoam Arts">Styrofoam Arts</option>
                        <option value="Paintings">Paintings</option>
                        <option value="Props">Props</option>
                        <option value="Costumes">Costumes</option>
                        <option value="Backdrops">Backdrops</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">Select Product:</label>
                    <select id="product" name="product" class="form-control" required>
                        <option selected disabled>---</option>
                        <!-- For Styrofoam Arts -->
                        <option value="custom-styrofoam-sculpture">Customized Styrofoam Sculptures</option>
                        <option value="decorative-styrofoam-art">Decorative Styrofoam Art</option>
                        <option value="themed-styrofoam-figures">Themed Styrofoam Figures</option>
                        <option value="event-specific-styrofoam-decorations">Event-Specific Styrofoam Decorations</option>

                        <!-- For Paintings -->
                        <option value="landscape-painting">Landscape Paintings</option>
                        <option value="portrait-painting">Portrait Paintings</option>
                        <option value="abstract-painting">Abstract Paintings</option>
                        <option value="custom-commissioned-painting">Custom Commissioned Paintings</option>

                        <!-- For Props -->
                        <option value="themed-event-props">Themed Event Props</option>
                        <option value="stage-props">Stage Props</option>
                        <option value="photo-booth-props">Photo Booth Props</option>
                        <option value="custom-props">Custom Props</option>

                        <!-- For Costumes -->
                        <option value="themed-costume">Themed Costumes</option>
                        <option value="custom-costume">Custom Costumes</option>
                        <option value="costume-accessories">Costume Accessories</option>
                        <option value="event-specific-costume">Event-Specific Costumes</option>

                        <!-- For Backdrops -->
                        <option value="wedding-backdrop">Wedding Backdrops</option>
                        <option value="birthday-backdrop">Birthday Party Backdrops</option>
                        <option value="photo-studio-backdrop">Photo Studio Backdrops</option>
                        <option value="customizable-event-backdrop">Customizable Event Backdrops</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="color">Select Color:</label>
                    <input type="color" id="color" name="color" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="theme">Enter Theme (if any):</label>
                    <input type="text" id="theme" name="theme" class="form-control">
                </div>
                <div class="form-group">
                    <label for="eventType">Select Event Type:</label>
                    <select class="form-control" id="eventType" name="event_type" required>
                        <option selected disabled>---</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Christening">Christening</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Additional Message:</label>
                    <textarea id="message" name="message" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="delivery_option">Select Delivery Option:</label>
                    <select id="delivery_option" name="delivery_option" class="form-control" required>
                        <option value="Pickup">Pickup</option>
                        <option value="Deliver">Deliver</option>
                    </select>
                </div>

                <div class="form-group" id="deliveryAddressField" style="display: none;">
                    <label for="delivery_address">Delivery Address:</label>
                    <textarea id="delivery_address" name="delivery_address" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Combined Order Customization and Booking Form End -->
@endsection
