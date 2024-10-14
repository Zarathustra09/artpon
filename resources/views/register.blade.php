<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register Now!</title>
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

        .form-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            font-family: 'BaksoSapi', sans-serif;
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
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s;
            color: #fff8e9;
        }

        .btn-primary:hover {
            background-color: #dd4545;
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
        }
    </style>
</head>

<body>

    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1>ARTpon StyroCraft</h1>
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
        <h2 class="text-center mb-4">Create an account to start booking!</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <form method="POST" action="{{ route('artpons.register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="contactNumber">Contact Number:</label>
                            <input type="text" id="contactNumber" name="contactNumber" class="form-control" required pattern="\+?[0-9\s\-]{7,15}" title="Please enter a valid phone number, e.g., +1234567890">
                        </div>

                        <div class="form-group">
                            <label for="password">Create Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must be at least 8 characters long and include at least one uppercase letter and one digit">
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="userRole">Role:</label>
                            <select id="userRole" name="userRole" class="form-control" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">Already have an account? <a href="{{ route('artpons.login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>&copy; 2023 ARTpon StyroCraft. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match.');
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>

</body>
</html>