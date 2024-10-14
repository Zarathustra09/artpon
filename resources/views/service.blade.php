<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Our Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="services, sidebar, navbar, unique design">
    <meta name="description" content="Explore our range of services with a uniquely designed interface.">

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

    <!-- Custom Stylesheet -->
    <style>
        @font-face {
            font-family: 'BaksoSapi';
            src: url('{{ asset('frontend/fonts/BaksoSapi.otf') }}') format('opentype');
        }

        body {
            font-family: 'BaksoSapi';
            src: url('fonts/BaksoSapi.otf') format('opentype');
            background-color: #fff8e9;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
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
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #fff8e9;
            display: block;
        }
        .sidebar a:hover {
            background-color: #d44a4a;
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
            font-family: 'BaksoSapi';
            src: url('fonts/BaksoSapi.otf') format('opentype');
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

        /* Section Titles */
        .section-title {
            margin-bottom: 50px;
            text-align: center;
        }
        .section-title h2 {
            font-family: 'BaksoSapi';
            src: url('fonts/BaksoSapi.otf') format('opentype');
            font-size: 36px;
            color: #000000;
            font-weight: lighter;
        }

        /* Service List */
        .services-list {
            margin-bottom: 40px;
        }
        .services-list .service-item {
            margin-bottom: 20px;
        }
        .services-list .service-item i {
            font-size: 24px;
            color: #ee5353;
            margin-right: 10px;
        }

        /* Testimonials */
        .testimonials {
            background-color: #fff8e9;
            padding: 40px 20px;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .testimonials .testimonial-item {
            margin-bottom: 20px;
        }
        .testimonials .testimonial-item .testimonial-content {
            background-color: #ee5353;
            padding: 20px;
            border-radius: 10px;
            color: #fff8e9;
        }

        /* Contact Form */
        .contact-form {
            background-color: #fff8e9;
            padding: 40px 20px;
            border-radius: 10px;
        }
        .contact-form .form-control {
            margin-bottom: 15px;
        }

        /* Footer */
        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 10px 0;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
            }
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {
                text-align: center;
                float: none;
            }
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
        <a href="/booking"><i class="fas fa-calendar-check"></i> Book Now</a>
        <a href="/profile"><i class="fas fa-user"></i> My Profile</a>
        <a href="/contact"><i class="fas fa-envelope"></i> Contact</a>
        
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

        </section>

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
    </script>
</body>
</html>
