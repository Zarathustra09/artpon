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
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Customers',
                    data: [12, 19, 3, 5, 2, 3],
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
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Products',
                    data: [15, 10, 5, 2, 20, 30],
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
                labels: ['Completed', 'Pending', 'Cancelled'],
                datasets: [{
                    label: 'Bookings',
                    data: [10, 5, 2],
                    backgroundColor: [
                        primaryColor,
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        primaryColor,
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

        // Payment Chart
        var ctx = document.getElementById('paymentChart').getContext('2d');
        var paymentChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Paid', 'Unpaid'],
                datasets: [{
                    label: 'Payments',
                    data: [8, 4],
                    backgroundColor: [
                        backgroundColor,
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        borderColor,
                        'rgba(255, 159, 64, 1)'
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
