<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/libs/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <style>
        @font-face {
            font-family: 'BaksoSapi';
            src: url('{{ asset('frontend/fonts/BaksoSapi.otf') }}') format('opentype');
        }

        body {
            font-family: 'BaksoSapi', cursive;
            background-color: #fff8e9;
            color: #ee5353;
            margin: 0;
            padding: 0;
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: #ee5353;
            padding: 10px 20px;
        }

        .navbar-brand h1 {
            font-family: 'BaksoSapi',cursive;
            color: #fff8e9;
            font-size: 28px;
            margin: 0;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff8e9;
            font-size: 18px;
            margin-left: 20px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #fff;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #ee5353;
            padding-top: 20px;
            z-index: 1000;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff8e9;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ee5353;
            color: #fff8e9;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #ee5353;
            color: #fff8e9;
        }

        /* Profile and Notifications */
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #ee5353;
            border-radius: 5px;
        }

        .profile img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile h5 {
            margin: 0;
        }

        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 10px 0;
            text-align: center;
        }

        .bookinghistory {
            font-family: 'BaksoSapi', cursive;
    
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ee5353;
            margin-top: 20px;
        }

        .bookinghistory h2 {
            font-family: 'BaksoSapi', cursive;
            color: fff8e9;
            font-size: 28px;
           
            margin-bottom: 20px;
        }

        .bookinghistorytable {
            width: 100%;
            border-collapse: collapse;
        }

        .bookinghistorytable th,
        .bookinghistorytable td {
            border: 1px solid #ee5353;
            padding: 10px;
            text-align: left;
        }

        .bookinghistorytable th {
            background-color: #ee5353;
            color: #fff8e9;
        }
    </style>
</head>

<body>

    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="profile">
            <!-- Add a profile image if needed -->
            <h5>Welcome!</h5>
            </div>

            <a href="/dashboard"><i class="fas fa-home"></i> Home</a>
        <a href="/booking"><i class="fas fa-calendar-check"></i> Book Now</a>
        <a href="/profile"><i class="fas fa-user"></i> My Profile</a>
        <a href="/contact"><i class="fas fa-envelope"></i> Contact</a>
        <a href="/service"><i class="fas fa-concierge-bell"></i> Services</a>
       
        <a href="/payment_history"><i class="fas fa-money-check-alt"></i> Payment Records</a>
        <a href="/track"><i class="fas fa-search"></i> Track Orders</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <!-- Sidebar End -->

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="">
                <h1>ARTpon StyroCraft</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="fas fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center">
                <h1 class="display-1 mb-4">Booking History</h1>
            </div>
    </div>

            <!-- Booking History Start -->
  
            <div class="container my-5">
        <div id="Bookings" class="dashboard-section">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                                <th>Service</th>
                                <th>Product</th>
                                <th>Color</th>
                                <th>Theme</th>
                                <th>Event Type</th>
                                <th>Date</th>
                                <th>Order Details</th>
                                <th>Pickup/Delivery</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody id="bookingHistoryTable">
                            <!-- Booking records will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Booking History End -->
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/libs/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: ''',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tableBody = $('#bookingHistoryTable');
                    tableBody.empty(); // Clear existing data

                    $.each(data, function(index, booking) {
                        var row = '<tr>' +
                            '<td>' + booking.service + '</td>' +
                            '<td>' + booking.product + '</td>' +
                            '<td>' + booking.color + '</td>' +
                            '<td>' + booking.theme + '</td>' +
                            '<td>' + booking.event_type + '</td>' +
                            '<td>' + booking.date + '</td>' +
                            '<td>' + booking.order_details + '</td>' +
                            '<td>' + booking.pickup_delivery + '</td>' +
                            '<td>' + booking.address + '</td>' +
                            '</tr>';
                        tableBody.append(row);
                    });
                }
            });
        });
    </script>
</body>

</html>
