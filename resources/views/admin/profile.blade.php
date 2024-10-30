@extends('layouts.artpon-app')

@section('content')
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
@endsection
