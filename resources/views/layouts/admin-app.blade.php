<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/libs/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/libs/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'BaksoSapi';
            src: url('{{ asset('frontend/fonts/BaksoSapi.otf') }}') format('opentype');
        }

        body {
            font-family: 'BaksoSapi';
            src: url('{{ asset('frontend/fonts/BaksoSapi.otf') }}') format('opentype');
            background-color: #fff8e9;
            color: #ee5353;
            margin: 0;
            padding: 0;
        }

        /* Content */
        .content {
            font-family: 'BaksoSapi', cursive;
            margin-left: 250px;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: #ee5353;
            padding: 10px 20px;
        }
        .navbar-brand h1 {
            font-family: 'BaksoSapi', cursive;
            color: #fff8e9;
            font-size: 28px;
            margin: 0;
        }
        .navbar-nav .nav-item .nav-link {
            font-family: 'BaksoSapi', cursive;
            color: #fff8e9;
            font-size: 18px;
            margin-left: 20px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            font-family: 'BaksoSapi', cursive;
            color: #fff;
        }

        .section-title {
            margin-bottom: 50px;
            text-align: center;
        }
        .section-title h2 {
            font-family: 'BaksoSapi';
            font-size: 36px;
            color: #000000;
            font-weight: lighter;
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

        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #ee5353;
            color: #fff8e9;
        }

        /* Footer */
        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 10px 0;
            text-align: center;
        }



        /* Notification and Settings Boxes */
        .box {
            display: none;
            position: absolute;
            top: 60px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1001;
        }
        .box-header {
            background-color: #ee5353;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .box-body {
            padding: 10px;
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="profile">
        <h5>Welcome!</h5>
    </div>
    <a href="{{route('artpons.admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{route('artpons.admin.customer')}}"><i class="fas fa-users"></i> Customer</a>
    {{--    <a href="/profile"><i class="fas fa-user"></i> My Profile</a>--}}
    <a href="{{route('artpons.admin.product')}}"><i class="fas fa-box"></i> Products</a>
    {{--    <a href="/service"><i class="fas fa-concierge-bell"></i> Services</a>--}}
    <a href="{{route('artpons.admin.booking')}}"><i class="fas fa-calendar-alt"></i> Bookings</a>
    <a href="{{route('artpons.admin.payment')}}"><i class="fas fa-credit-card"></i> Payments</a>
</div>

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
                    <a class="nav-link" href="#" id="notifications"><i class="fas fa-bell"></i> Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="settings"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul>
        </div>
    </nav>

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
        {{--        <div class="box-body">--}}
        {{--            <p>Settings content here.</p>--}}
        {{--        </div>--}}
        <div class="box-body">
            <a href="{{route('artpons.profile')}}" class="btn btn-primary">My Profile</a>
        </div>
        <div class="box-body">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>


    <!-- Product Gallery Start -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')

            </div>
        </div>
    </div>
    <!-- Product Gallery End -->

    <!-- Footer -->
    <div class="footer">
        <p>&copy; ARTpon StyroCraft. All Rights Reserved.</p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>


<script>   // Notifications and Settings Box Toggle
    document.getElementById("notifications").addEventListener("click", function() {
        var box = document.getElementById("notificationsBox");
        if (box.style.display === "block") {
            box.style.display = "none";
        } else {
            box.style.display = "block";
        }
    });

    document.getElementById("settings").addEventListener("click", function() {
        var box = document.getElementById("settingsBox");
        if (box.style.display === "block") {
            box.style.display = "none";
        } else {
            box.style.display = "block";
        }
    });

    // Close the boxes if clicked outside
    document.addEventListener("click", function(event) {
        var notificationsBox = document.getElementById("notificationsBox");
        var settingsBox = document.getElementById("settingsBox");
        if (!notificationsBox.contains(event.target) && event.target.id !== "notifications") {
            notificationsBox.style.display = "none";
        }
        if (!settingsBox.contains(event.target) && event.target.id !== "settings") {
            settingsBox.style.display = "none";
        }
    });

    // Toggle delivery address field
    document.getElementById('delivery_option').addEventListener('change', function() {
        const deliveryField = document.getElementById('deliveryAddressField');
        if (this.value === 'Deliver') {
            deliveryField.style.display = 'block';
        } else {
            deliveryField.style.display = 'none';
        }
    });
</script>
<script>
    @if (session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false
    });
    @endif

    @if (session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('error') }}',
        timer: 3000,
        showConfirmButton: false
    });
    @endif
</script>

@stack('scripts')

</body>
</html>
