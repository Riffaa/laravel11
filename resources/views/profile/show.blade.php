@extends('layouts.app')

@section('content')
    <style>
        .profile-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .profile-title {
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .profile-avatar {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .profile-info {
            text-align: center;
            margin: 10px 0;
        }
        .profile-label {
            font-weight: bold;
        }
    </style>

    <div class="container mt-5">
        <div class="profile-container">
            <h2 class="profile-title">User Profile</h2>

            <div class="text-center">
                @if($user->avatar)
                    <img src="{{ Storage::url($user->avatar) }}" alt="User Avatar" class="profile-avatar">
                @else
                    <p class="text-muted">No avatar uploaded.</p>
                @endif
            </div>

            <div class="profile-info">
                <p class="profile-label">Name:</p>
                <p>{{ $user->name }}</p>
                <p class="profile-label">Email:</p>
                <p>{{ $user->email }}</p>
                <p class="profile-label">Role:</p>
                <p>{{ ucfirst($user->role) }}</p>
            </div>
        </div>
    </div>
@endsection
