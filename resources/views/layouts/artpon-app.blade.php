<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            margin-bottom: 0;
        }

        .navbar-toggler {
            border: none;
            background-color: #fff;
        }

        .navbar .nav-link {
            color: #fff8e9;
            padding: 0.5rem 1rem;
            transition: opacity 0.3s;
        }

        .navbar .nav-link:hover {
            opacity: 0.8;
            color: #fff8e9;
            text-decoration: none;
        }

        .nav-auth-links {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .auth-link {
            color: #fff8e9;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .auth-link:hover {
            color: #fff8e9;
            text-decoration: none;
            opacity: 0.8;
        }

        .auth-link.register {
            background-color: rgba(255, 255, 255, 0.2);
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

        @media (max-width: 768px) {
            .nav-auth-links {
                margin-top: 1rem;
            }

            .navbar-nav {
                flex-direction: row;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-4">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1>ARTpon StyroCraft</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto nav-auth-links">
                    <a href="https://web.facebook.com/theARTpon" class="nav-link">About</a>
                    <a href="{{ url('contact') }}" class="nav-link">Contact</a>

                    @guest
                        <a href="{{ route('login') }}" class="auth-link">Login</a>
                        <a href="{{ route('register') }}" class="auth-link register">Register</a>
                    @else
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if(auth()->user()->role === 1)
                                    <li><a class="dropdown-item" href="{{route('artpons.admin.dashboard')}}">Home</a></li>

                                @else
                                    <li><a class="dropdown-item" href="{{route('artpons.dashboard')}}">Home</a></li>
                                @endif
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>


                            </ul>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>

@yield('content')

<footer class="footer text-center">
    <p>&copy; 2024 ARTpon StyroCraft. All rights reserved.</p>
</footer>

<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>
