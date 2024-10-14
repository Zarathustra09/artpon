<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Now!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

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

        .navbar-toggler {
            border: none;
            background-color: #fff;
        }

        .navbar .nav-link,
        .navbar .dropdown-item {
            color: #050505;
        }

        .navbar .dropdown-item {
            color: #000;
        }

        .navbar .dropdown-menu {
            background-color: #fff;
        }

        .form-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            font-family: 'BaksoSapi', sans-serif;
        }

        .form-container:hover {
            transform: translateY(-5px);
        }

        .form-group label {
            font-weight: 600;
            color: #181818;
        }

        .form-control {
            border-radius: 50px;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .btn-primary {
            background-color: #ee5353;
            border: none;
            padding: 5px 10px;
            border-radius: 50px;
            transition: background-color 0.3s;
            color: #fff8e9;
        }

        .btn-primary:hover {
            background-color: #ee5353;
            color: #fff8e9;
        }

        .text-center a {
            color: #ee5353;
            text-decoration: none;
            font-family: 'BaksoSapi';
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 20px 0;
            font-family: 'BaksoSapi', sans-serif;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="text-#f0e2c1">ARTpon StyroCraft</h1>
                </a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('about') }}">About ARTpon StyroCrafts</a>
                        <a class="dropdown-item" href="https://web.facebook.com/theARTpon">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">Login</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">Don't have an account? <a href="{{ route('artpons.register') }}">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>&copy; 2024 ARTpon StyroCraft. All rights reserved.</p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
