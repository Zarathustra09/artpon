<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Book Now!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
            font-family: 'BaksoSapi';
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
            font-family: 'BaksoSapi', cursive;
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

        .order-form {
            background-color: #fff8e9;
            padding: 20px;
            border: 1px solid #ee5353;
            margin-top: 20px;
        }

        .order-form .form-group {
            margin-bottom: 15px;
        }

        .order-form .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .order-form .form-group input,
        .order-form .form-group select,
        .order-form .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ee5353;
        }

        .order-form .btn {
            background-color: #ee5353;
            color: #fff8e9;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .order-summary {
            background-color: #fff8e9;
            padding: 20px;
            border: 1px solid #ee5353;
            margin-top: 20px;
            display: none;
        }

        .order-summary h4 {
            font-weight: bold;
        }

        .order-summary .summary-item {
            margin-bottom: 10px;
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

    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="profile">
            <h5>Welcome!</h5>
            </div>
            <a href="/dashboard"><i class="fas fa-home"></i> Home</a>
        <a href="/profile"><i class="fas fa-user"></i> My Profile</a>
        <a href="/contact"><i class="fas fa-envelope"></i> Contact</a>
        <a href="/service"><i class="fas fa-concierge-bell"></i> Services</a>
        <a href="/booking_history"><i class="fas fa-history"></i> Booking History</a>
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
            <div class="box-body">
                <p>Settings content here.</p>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center">
                <h1 class="display-1 mb-4">Booking</h1>
            </div>
        </div>

        <!-- Combined Order Customization and Booking Form Start -->
        <div class="container my-5">
            <p class="text-center">Customize Your Order</p>
            <div class="order-form">
                <form id="bookingForm" action="" method="post">
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
                        <select class="form-control" id="eventType" name="eventType" required>
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

        <!-- Footer -->
        <footer class="footer mt-4">
            <p>&copy; 2024 ARTpon StyroCraft. All Rights Reserved.</p>
        </footer>
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

    <!-- Template Javascript -->
    <script>
        $(document).ready(function() {
            // Fetch and display booking history
            $.ajax({
                url: '', // Adjust route as needed
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tableBody = $('#bookingHistory');
                    tableBody.empty();
                    data.forEach(function(booking) {
                        tableBody.append('<tr>' +
                            '<td>' + booking.booking_id + '</td>' +
                            '<td>' + booking.product_id + '</td>' +
                            '<td>' + booking.booking_date + '</td>' +
                            '<td>' + booking.status + '</td>' +
                            '</tr>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching booking history:', error);
                }
            });

            // Notifications and Settings Box Toggle
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