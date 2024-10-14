<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="contact, services, unique design">
    <meta name="description" content="Get in touch with us for any queries or information.">

 
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
            font-family: 'BaksoSapi', sans-serif;
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
            font-family: 'BaksoSapi', sans-serif;
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
            margin-bottom: 40px;
            text-align: center;
        }
        .section-title h2 {
            font-size: 36px;
            color: #ee5353;
            font-weight: bold;
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
        <a href="{{ route('user_dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('book') }}"><i class="fas fa-calendar-check"></i> Book Now</a>
        <a href="{{ route('profile') }}"><i class="fas fa-user"></i> My Profile</a>
        <a href="{{ route('service') }}"><i class="fas fa-concierge-bell"></i> Services</a>
        <a href="{{ route('bookinghistory') }}"><i class="fas fa-history"></i> Booking History</a>
        <a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <!-- Sidebar End -->

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('index') }}">
                <h1>ARTpon StyroCraft</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notifications') }}"><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('settings') }}"><i class="fas fa-cog"></i> Settings</a>
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

        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <form method="post" action="{{ route('contact.submit') }}">
                                @csrf
                                <input type="text" name="name" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name" aria-label="Your Name">
                                <input type="email" name="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email" aria-label="Your Email">
                                <textarea name="message" class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message" aria-label="Your Message"></textarea>
                                <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>Purok PAGASA, Capitol Rd. Surigao City, Surigao Del Norte, Philippines</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Email</h4>
                                        <p class="mb-2">jcarloarpon@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Contact Number</h4>
                                        <p class="mb-2">(+639)954431631</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Feature Start -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="mb-4">Our Location</h2>
                            <div id="map" class="w-100" style="height: 400px; background-color: #eee;"></div>
                        </div>
                        <div class="col-12 mt-5">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How can I book a service?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            You can book a service by visiting our booking page and filling out the required details.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What payment methods do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We accept various payment methods including credit/debit cards and bank transfers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How do I get a refund?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            To request a refund, please contact our support team with your booking details and reason for the refund.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Feature End -->
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </div>
        <!-- Footer -->
        <footer class="footer mt-4">
            <p>&copy; 2024 ARTpon StyroCraft. All Rights Reserved.</p>
        </footer>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

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