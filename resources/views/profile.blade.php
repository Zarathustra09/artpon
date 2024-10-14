<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="profile, sidebar, navbar, unique design">
    <meta name="description" content="View and manage your profile with our uniquely designed interface.">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
            background-color: #fff8e9;
        }

        .nav-bar {
            background-color: #ee5353;
        }

        .navbar-brand h1 {
            font-family: 'BaksoSapi', cursive;
          
            color: #fff8e9;
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
         padding: 10px 15px;
         text-decoration: none;
         font-size: 18px;
         color: #fff8e9;
         display: block;
     }
     .sidebar a:hover {
         background-color: #d94444;
         color: #fff;
     }
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

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color: #ee5353;
            padding: 10px 20px;
        }
        .navbar-brand h1 {
            font-family: 'BaksoSapi';
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

        .profile-info {
            background-color: #fff8e9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .profile-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .profile-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 10px 0;
            text-align: center;
        }

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
            <a class="navbar-brand" href="index.php">
                <h1>ARTpon StyroCraft</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="notifications.php"><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php"><i class="fas fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Profile Section -->
        <section class="profile-info">
            <div class="section-title">
                <h2>My Profile</h2>
            </div>
            <h3>Personal Information</h3>
            <form action="update_profile.php" method="POST">
                <p><strong>Name:</strong> <input type="text" name="fullName" value="" required></p>
                <p><strong>Email:</strong> <input type="email" name="email" value="" required></p>
                <p><strong>Phone:</strong> <input type="text" name="phone" value="" required></p>
                <button type="submit">Update Profile</button>
            </form>
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
