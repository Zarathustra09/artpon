@extends('layouts.app')

@section('content')

    <style>
        #container {
            max-width: 550px;
        }

        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #007bff;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #007bff;
            z-index: -1;
        }

        #multi-step-form {
            overflow-x: hidden;
        }

        .service-card, .product-card {
            cursor: pointer;
            border: 2px solid transparent;
        }

        .service-card.selected, .product-card.selected {
            border-color: #007bff;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            border-radius: 0.25rem;
        }

        .form-group .form-control {
            padding: 0.75rem;
        }

        .form-group .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>

    <!-- Hero Section -->
    <div class="container-fluid bg-light py-3 my-3 mt-0">
        <div class="container text-center">
            <h1 class="display-4 mb-2">Booking</h1>
        </div>
    </div>

    <!-- Multi-Step Booking Form Start -->
    <div id="container" class="container mt-5">
        <div class="progress px-1" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-container d-flex justify-content-between">
            <div class="step-circle" onclick="displayStep(1)">1</div>
            <div class="step-circle" onclick="displayStep(2)">2</div>
            <div class="step-circle" onclick="displayStep(3)">3</div>
            <div class="step-circle" onclick="displayStep(4)">4</div>
            <div class="step-circle" onclick="displayStep(5)">5</div>
        </div>

        <form id="multi-step-form" action="{{ route('booking.store') }}" method="post">
            @csrf
            <div class="step step-1">
                <h3>Step 1</h3>
                <div class="form-group">
                    <label for="service">Select Service:</label>
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-4 mb-3">
                                <div class="card service-card" data-service-id="{{ $service->id }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $service->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <input type="hidden" id="service" name="service" required>
                </div>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-2">
                <h3>Step 2</h3>
                <div class="form-group">
                    <label for="product">Select Product:</label>
                    <div class="row" id="product-cards">
                        <!-- Product cards will be dynamically added here -->
                    </div>
                    <input type="hidden" id="product" name="product" required>
                    <input type="hidden" id="product_price" name="product_price">
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-3">
                <h3 class="mb-4">Step 3: Customize Your Event</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <label for="color">Select Color:</label>
                                <input type="color" id="color" name="color" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="price" name="price" value="">
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <label for="theme">Enter Theme (if any):</label>
                                <input type="text" id="theme" name="theme" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Select Event Type</h5>
                        <select class="form-control mt-3" id="eventType" name="event_type" required>
                            <option selected disabled>Choose an option...</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Christening">Christening</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next</button>
                </div>
            </div>

            <div class="step step-4">
                <h3 class="mb-4">Step 4: Finalize Your Booking</h3>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Select Date</h5>
                        <input type="date" id="date" name="date" class="form-control mt-3" required>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Additional Message</h5>
                        <textarea id="message" name="message" class="form-control mt-3" rows="3" placeholder="Add any special requests or details here..."></textarea>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Select Delivery Option</h5>
                        <select id="delivery_option" name="delivery_option" class="form-control mt-3" required>
                            <option value="Pickup">Pickup</option>
                            <option value="Deliver">Deliver</option>
                        </select>
                    </div>
                </div>

                <div class="card shadow-sm mb-4" id="deliveryAddressField" style="display: none;">
                    <div class="card-body">
                        <h5 class="card-title">Delivery Address</h5>
                        <textarea id="delivery_address" name="delivery_address" class="form-control mt-3" rows="3" placeholder="Enter your delivery address here..."></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next</button>
                </div>
            </div>

            <div class="step step-5">
                <h3>Step 5: Checkout</h3>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Service</h6>
                                        <p id="summary_service" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Product</h6>
                                        <p id="summary_product" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Color</h6>
                                        <p id="summary_color" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Event Theme</h6>
                                        <p id="summary_theme" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Event Type</h6>
                                        <p id="summary_event_type" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Event Date</h6>
                                        <p id="summary_date" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Additional Message</h6>
                                        <p id="summary_message" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Delivery Option</h6>
                                        <p id="summary_delivery_option" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" id="summary_delivery_address_field" style="display: none;">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Delivery Address</h6>
                                        <p id="summary_delivery_address" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Total Amount</h6>
                                        <p id="total" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>


        </form>
    </div>
    <!-- Multi-Step Booking Form End -->
@endsection

@push('scripts')
    <script>
        var currentStep = 1;
        var updateProgressBar;

        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 5) {
                $(".step-" + currentStep).hide();
                $(".step-" + stepNumber).show();
                currentStep = stepNumber;
                updateProgressBar();
            }
        }

        $(document).ready(function() {
            $('#multi-step-form').find('.step').slice(1).hide();

            $(".next-step").click(function() {
                if (validateStep(currentStep)) {
                    if (currentStep < 5) {
                        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                        currentStep++;
                        setTimeout(function() {
                            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                            updateProgressBar();
                            if (currentStep === 5) {
                                populateSummary();
                            }
                        }, 500);
                    }
                }
            });

            $(".prev-step").click(function() {
                if (currentStep > 1) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                    currentStep--;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                        $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                        updateProgressBar();
                    }, 500);
                }
            });

            function validateStep(step) {
                var isValid = true;
                $(".step-" + step + " [required]").each(function() {
                    if ($(this).val() === "" || $(this).val() === null) {
                        isValid = false;
                        $(this).addClass("is-invalid");
                        Swal.fire({
                            icon: 'warning',
                            title: 'Required Field',
                            text: 'Please fill out this field.',
                            confirmButtonText: 'OK'
                        });
                        return false; // Break the loop
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });
                return isValid;
            }

            updateProgressBar = function() {
                var progressPercentage = ((currentStep - 1) / 4) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            }

            $('.service-card').click(function() {
                $('.service-card').removeClass('selected');
                $(this).addClass('selected');
                $('#service').val($(this).data('service-id')).trigger('change');
            });

            $('#service').change(function() {
                var serviceId = $(this).val();
                var products = @json($services->pluck('products', 'id'));
                $('#product-cards').empty();
                if (products[serviceId]) {
                    products[serviceId].forEach(function(product) {
                        $('#product-cards').append(
                            '<div class="col-md-4 mb-3">' +
                            '<div class="card product-card" data-product-id="' + product.id + '" data-price="' + product.price + '">' +
                            '<div class="card-body text-center">' +
                            '<h5 class="card-title">' + product.name + '</h5>' +
                            '<p class="card-text">₱' + product.price + '</p>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        );
                    });
                }
            });

            $(document).on('click', '.product-card', function() {
                $('.product-card').removeClass('selected');
                $(this).addClass('selected');
                $('#product').val($(this).data('product-id'));
                $('#product_price').val($(this).data('price'));
                $('#price').val($(this).data('price')); // Set the hidden price input field
                $('#total').text('₱' + $(this).data('price')); // Display the price
            });

            $('#delivery_option').change(function() {
                if ($(this).val() === 'Deliver') {
                    $('#deliveryAddressField').show();
                } else {
                    $('#deliveryAddressField').hide();
                }
            });

            function populateSummary() {
                $('#summary_service').text($('.service-card.selected .card-title').text());
                $('#summary_product').text($('.product-card.selected .card-title').text());

                // Display the color representation
                var colorValue = $('#color').val();
                $('#summary_color').css('background-color', colorValue).text(colorValue);

                $('#summary_theme').text($('#theme').val());
                $('#summary_event_type').text($('#eventType').val());
                $('#summary_date').text($('#date').val());
                $('#summary_message').text($('#message').val());
                $('#summary_delivery_option').text($('#delivery_option').val());

                if ($('#delivery_option').val() === 'Deliver') {
                    $('#summary_delivery_address').text($('#delivery_address').val());
                    $('#summary_delivery_address_field').show();
                } else {
                    $('#summary_delivery_address_field').hide();
                }

                // Ensure the total amount is populated correctly
                $('#total').text('₱' + $('#product_price').val());
            }
        });
    </script>
@endpush
