<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Records of Payment</title>
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

       

        .payment-records {
            font-family: 'BaksoSapi', cursive;
    
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ee5353;
            margin-top: 20px;
        }

        .payment-records h2 {
            font-family: 'BaksoSapi', cursive;
            color: fff8e9;
            font-size: 28px;
           
            margin-bottom: 20px;
        }

        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-table th,
        .payment-table td {
            border: 1px solid #ee5353;
            padding: 10px;
            text-align: left;
        }

        .payment-table th {
            background-color: #ee5353;
            color: #fff8e9;
        }
    </style>
</head>

<body>

    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="profile">
            <img src="/ARTpon StyroCraft Web-App\blankdp.jpg" alt="User Profile" width="50" height="50">
            <h5>Welcome!</h5>
            </div>
            <a href="/dashboard"><i class="fas fa-home"></i> Home</a>
        <a href="/booking"><i class="fas fa-calendar-check"></i> Book Now</a>
        <a href="/profile"><i class="fas fa-user"></i> My Profile</a>
        <a href="/contact"><i class="fas fa-envelope"></i> Contact</a>
        <a href="/service"><i class="fas fa-concierge-bell"></i> Services</a>
        <a href="/booking_history"><i class="fas fa-history"></i> Booking History</a>
        
        <a href="/track"><i class="fas fa-search"></i> Track Orders</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <!-- Sidebar End -->

   <!-- Content -->
   <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">
            <h1>ARTpon StyroCraft</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="notifications.html"><i class="fas fa-bell"></i> Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.html"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul>
        </div>
    </nav>

        <!-- Hero Section -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center">
                <h1 class="display-1 mb-4">Payment Records</h1>
            </div>

            <!-- Payment Records Start -->
            <div class="container my-5">
                <div class="payment-records">
                    <h2>Payment History</h2>
                    <table class="payment-table">
                        <thead>
                            <tr>
                                <th>Payment ID</th>
                                <th>Date</th>
                                <th>Service</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="paymentHistory">
                            <!-- Example rows -->
                            <!-- These rows should be dynamically populated -->
                            <tr>
                                <td>001</td>
                                <td>2024-06-01</td>
                                <td>Custom Styrofoam Sculpture</td>
                                <td>$100</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>2024-06-05</td>
                                <td>Premium Styrofoam Art</td>
                                <td>$150</td>
                                <td>Paid</td>
                            </tr>
                            <!-- End of example rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Payment Records End -->

            <!-- Footer Start -->
            <footer class="footer mt-auto py-3 bg-dark text-light">
                <div class="container text-center">
                    <p>&copy; <a href="#">ARTpon StyroCraft</a>, All Right Reserved.</p>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>
    <!-- Content End -->

      <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/lib/easing/easing.min.js"></script>
    <script src="frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="frontend/lib/counterup/counterup.min.js"></script>
    <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="frontend/lib/lightbox/js/lightbox.min.js"></script>

   <script>
        $(document).ready(function () {
            $.ajax({
                url: 'get_payment_records.php', // Make sure this URL returns the payment records in JSON format
                method: 'GET',
                success: function (data) {
                    const paymentHistory = JSON.parse(data);
                    let rows = '';
                    paymentHistory.forEach(record => {
                        rows += `<tr>
                                    <td>${record.id}</td>
                                    <td>${record.date}</td>
                                    <td>${record.service}</td>
                                    <td>${record.amount}</td>
                                    <td>${record.status}</td>
                                </tr>`;
                    });
                    $('#paymentHistory').html(rows);
                },
                error: function () {
                    alert('Failed to fetch payment records.');
                }
            });
        });
    </script>

</body>

</html>
