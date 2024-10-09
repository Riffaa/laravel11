<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('img/weblogin.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 50px;
            background-color: #003366;
            color: #fff;
        }
        
        .login-container input[type="email"]::placeholder,
        .login-container input[type="password"]::placeholder {
            color: #fff;
        }
        .login-container button[type="submit"] {
            width: 105%;
            padding: 12px;
            background-color: white;
            border: none;
            border-radius: 50px;
            color: red;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button[type="submit"]:hover {
            background-color: darkred;
        }
        
    </style>
<body>
<div class="login-container">
        <h2>Login</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            
        </form>
        
    </div>
</body>
</html>
