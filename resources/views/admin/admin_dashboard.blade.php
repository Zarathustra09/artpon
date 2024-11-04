@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="customerChart" width="400" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="productChart" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <canvas id="bookingChart" width="400" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="paymentChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Define colors from admin-app.blade.php
        const primaryColor = 'rgba(238, 83, 83, 1)';
        const secondaryColor = 'rgba(255, 248, 233, 1)';
        const backgroundColor = 'rgba(255, 248, 233, 0.2)';
        const borderColor = 'rgba(238, 83, 83, 1)';

        // Customer Chart
        var ctx = document.getElementById('customerChart').getContext('2d');
        var customerChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Customers',
                    data: @json(array_values($usersData)), // Data from the controller
                    backgroundColor: backgroundColor,
                    borderColor: borderColor,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Product Chart
        var ctx = document.getElementById('productChart').getContext('2d');
        var productChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Bookings',
                    data: @json(array_values($bookingsData)), // Data from the controller
                    backgroundColor: backgroundColor,
                    borderColor: borderColor,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Booking Chart
        var ctx = document.getElementById('bookingChart').getContext('2d');
        var bookingChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Pending', 'Confirmed', 'Cancelled', 'Completed'],
                datasets: [{
                    label: 'Bookings',
                    data: @json(array_values($bookingsByStatus)), // Data from the controller
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)', // Pending
                        'rgba(75, 192, 192, 0.2)', // Confirmed
                        'rgba(255, 99, 132, 0.2)', // Cancelled
                        'rgba(54, 162, 235, 0.2)'  // Completed
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)', // Pending
                        'rgba(75, 192, 192, 1)', // Confirmed
                        'rgba(255, 99, 132, 1)', // Cancelled
                        'rgba(54, 162, 235, 1)'  // Completed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

    </script>
@endsection
