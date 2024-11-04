@extends('layouts.admin-app')

@section('content')
    <!-- Profile Section -->
    <section class="profile-info">
        <div class="section-title">
            <h2>My Profile</h2>
        </div>
        <h3>Personal Information</h3>
        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <p><strong>Name:</strong> <input type="text" name="name" value="{{ $user->name }}" required></p>
            <p><strong>Email:</strong> <input type="email" name="email" value="{{ $user->email }}" required></p>
            <p><strong>Password:</strong> <input type="password" name="password"></p>
            <p><strong>Confirm Password:</strong> <input type="password" name="password_confirmation"></p>
            <button class="btn btn-primary" type="submit">Update Profile</button>
        </form>
        <form action="{{ route('admin.profile.destroy') }}" method="POST" style="margin-top: 20px;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
        </form>
    </section>
@endsection
