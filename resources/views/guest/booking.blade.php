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
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">Select Product:</label>
                    <select id="product" name="product" class="form-control" required>
                        <option selected disabled>---</option>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#service').change(function() {
                var serviceId = $(this).val();
                var products = @json($services->pluck('products', 'id'));
                $('#product').empty().append('<option selected disabled>---</option>');
                if (products[serviceId]) {
                    products[serviceId].forEach(function(product) {
                        $('#product').append('<option value="' + product.id + '">' + product.name + '</option>');
                    });
                }
            });

            $('#delivery_option').change(function() {
                if ($(this).val() === 'Deliver') {
                    $('#deliveryAddressField').show();
                } else {
                    $('#deliveryAddressField').hide();
                }
            });
        });
    </script>
@endpush
