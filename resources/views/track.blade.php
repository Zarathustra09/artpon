<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome Back!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
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
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Your Orders</h2>
                </div>
                <div class="card-body">
                    @if($orders->isEmpty())
                        <p>You have no orders at the moment.</p>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Footer -->
 <div class="footer">
            <p>&copy; ARTpon StyroCraft. All Rights Reserved.</p>
        </div>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/lib/easing/easing.min.js"></script>
    <script src="frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="frontend/lib/counterup/counterup.min.js"></script>
    <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="frontend/lib/lightbox/js/lightbox.min.js"></script>

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
        });
        </script>
</body>
</html>
