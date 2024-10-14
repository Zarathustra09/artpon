
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello Admin!</title>
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
    <link href="{{ asset('frontend/libs/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'BaksoSapi';
            src: url('{{ asset('frontend/fonts/BaksoSapi.otf') }}') format('opentype');
        }

        body {
            font-family: 'BaksoSapi', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
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

        .hero-section {
            background-color: #fff8e9;
            padding: 60px 0;
            text-align: center;
            color: #ee5353;
        }

        .hero-section h1 {
            font-size: 48px;
        }

        .hero-section img {
            width: 150px;
        }

        .form-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
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
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s;
            color: #fff8e9;
        }

        .btn-primary:hover {
            background-color: #d03c3c;
        }

        /* Custom styles for logout button */
        .btn-logout {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .footer {
            background-color: #000000;
            color: #fff8e9;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
        }

        .table-responsive {
            margin-bottom: 2rem;
        }

        .table-hover tbody tr:hover {
            background-color: #f7f7f7;
        }

        .table thead {
            background-color: #ee5353;
            color: #fff8e9;
        }

        .modal-content {
            color: #000000;
        }

        .dashboard-section {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .dashboard-section:hover {
            transform: translateY(-5px);
        }

        .dashboard-section h3 {
            color: #000000;
            font-family: 'BaksoSapi';
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand">
                    <h1>Hello Admin!</h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#Users" class="nav-item nav-link">Customers</a>
                        <a href="#Products" class="nav-item nav-link">Products</a>
                        <a href="#Bookings" class="nav-item nav-link">Bookings</a>
                        <a href="#Payments" class="nav-item nav-link">Payments</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <div class="hero-section">
        <div class="container">
            <h1>Welcome to ARTpon</h1>
            <img src="{{ asset('frontend/images/artpon_logo.png') }}" alt="ARTpon Logo">
            <p>Book <span style="font-weight: bold;">StyroCrafts</span> for Your Dream Event</p>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Admin Dashboard Start -->
    <div class="container my-5">
        <div id="Users" class="dashboard-section">
            <h3>Customers</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="usersTable">
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="Products" class="dashboard-section">
            <h3>Products</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productsTable">
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="Bookings" class="dashboard-section">
            <h3>Bookings</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">User</th>
                            <th scope="col">Product</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="bookingsTable">
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="Payments" class="dashboard-section">
            <h3>Payments</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Payment ID</th>
                            <th scope="col">User</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="paymentsTable">
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Admin Dashboard End -->

    <!-- Footer Start -->
    <div class="footer text-center">
        <div class="container">
            <p>&copy; 2024 ARTpon. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/libs/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/libs/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Custom Script -->
    <script>
        $(document).ready(function() {
            // Function to open the edit modal based on the type and ID
            function openEditModal(id, type) {
                $.ajax({
                    url: '', // Adjust route name
                    method: 'GET',
                    data: { id: id, type: type },
                    dataType: 'json',
                    success: function(data) {
                        if (type === 'user') {
                            $('#editUserId').val(data.user_id);
                            $('#editUserName').val(data.name);
                            $('#editUserEmail').val(data.email);
                            $('#editUserRole').val(data.role);
                            new bootstrap.Modal(document.getElementById('editUserModal')).show();
                        } else if (type === 'booking') {
                            $('#editBookingId').val(data.booking_id);
                            $('#editBookingUser').val(data.user_id);
                            $('#editBookingProduct').val(data.product_id);
                            $('#editBookingDate').val(data.booking_date);
                            $('#editBookingStatus').val(data.status);
                            new bootstrap.Modal(document.getElementById('editBookingModal')).show();
                        } else if (type === 'product') {
                            $('#editProductId').val(data.product_id);
                            $('#editProductName').val(data.name);
                            $('#editProductPrice').val(data.price);
                            $('#editProductStock').val(data.stock);
                            new bootstrap.Modal(document.getElementById('editProductModal')).show();
                        } else if (type === 'payment') {
                            $('#editPaymentId').val(data.payment_id);
                            $('#editPaymentUser').val(data.user_id);
                            $('#editPaymentAmount').val(data.amount);
                            $('#editPaymentDate').val(data.date);
                            new bootstrap.Modal(document.getElementById('editPaymentModal')).show();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching item details:', error);
                    }
                });
            }
        
            // Handle user form submission
            $('#editUserForm').submit(function(e) {
                e.preventDefault();
                const data = {
                    name: $('#editUserName').val(),
                    email: $('#editUserEmail').val(),
                    role: $('#editUserRole').val()
                };
                $.post('', { id: $('#editUserId').val(), type: 'user', data: data }, function(response) {
                    if (response.success) {
                        alert('User updated successfully');
                        location.reload();
                    } else {
                        alert('Update failed: ' + response.error);
                    }
                }, 'json');
            });
        
            // Handle booking form submission
            $('#editBookingForm').submit(function(e) {
                e.preventDefault();
                const data = {
                    user_id: $('#editBookingUser').val(),
                    product_id: $('#editBookingProduct').val(),
                    booking_date: $('#editBookingDate').val(),
                    status: $('#editBookingStatus').val()
                };
                $.post('', { id: $('#editBookingId').val(), type: 'booking', data: data }, function(response) {
                    if (response.success) {
                        alert('Booking updated successfully');
                        location.reload();
                    } else {
                        alert('Update failed: ' + response.error);
                    }
                }, 'json');
            });
        
            // Handle product form submission
            $('#editProductForm').submit(function(e) {
                e.preventDefault();
                const data = {
                    name: $('#editProductName').val(),
                    price: $('#editProductPrice').val(),
                    stock: $('#editProductStock').val()
                };
                $.post('', { id: $('#editProductId').val(), type: 'product', data: data }, function(response) {
                    if (response.success) {
                        alert('Product updated successfully');
                        location.reload();
                    } else {
                        alert('Update failed: ' + response.error);
                    }
                }, 'json');
            });
        
            // Handle payment form submission
            $('#editPaymentForm').submit(function(e) {
                e.preventDefault();
                const data = {
                    user_id: $('#editPaymentUser').val(),
                    amount: $('#editPaymentAmount').val(),
                    date: $('#editPaymentDate').val()
                };
                $.post('', { id: $('#editPaymentId').val(), type: 'payment', data: data }, function(response) {
                    if (response.success) {
                        alert('Payment updated successfully');
                        location.reload();
                    } else {
                        alert('Update failed: ' + response.error);
                    }
                }, 'json');
            });
        });
    </script>
</body>

</html>
