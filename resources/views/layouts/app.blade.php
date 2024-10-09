<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MAXMEDIA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif; /* Change font for better appearance */
        }
        .sidebar {
            width: 250px; /* Width of the sidebar */
            background-color: #f8f9fa; /* Light background for the sidebar */
            height: 100vh; /* Full height */
            padding: 20px; /* Padding for the sidebar */
            position: fixed; /* Fixed sidebar */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Shadow for a subtle 3D effect */
        }
        .sidebar h4 {
            text-align: center; /* Center the brand title */
            margin-bottom: 20px; /* Space below the title */
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #333; /* Dark text color */
            display: block;
            border-radius: 4px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }
        .sidebar a:hover {
            background-color: #e2e6ea; /* Highlight on hover */
        }
        .sidebar a.active {
            background-color: #007bff; /* Active link color */
            color: white; /* Active link text color */
        }
        .content {
            margin-left: 250px; /* Leave space for the sidebar */
            padding: 20px; /* Padding for the content area */
            flex-grow: 1; /* Allow content area to grow */
            background-color: #ffffff; /* Background for the content area */
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
    <img src="{{ asset('img/bangsawan.png') }} "  alt="Nama Gambar" style="height: 70px;">

        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ route('services.index') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('mbps.index') }}" class="{{ request()->is('mbps') ? 'active' : '' }}">Mbps Packages</a></li>
            <li><a href="{{ route('website.index') }}" class="{{ request()->is('website') ? 'active' : '' }}">Back to Website</a></li>
            <li><a href="{{ route('profile.show') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Profile</a></li>
            
            @if(auth()->user()->role === 'admin') <!-- Cek peran user -->
                <li><a href="{{ route('user.list') }}" class="{{ request()->is('user-list') ? 'active' : '' }}">User List</a></li>
            @endif
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        @yield('content') <!-- This will display the content from views using this layout -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>