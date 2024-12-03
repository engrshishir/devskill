<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Devskill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CDN -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .login-container .image-container {
            height: 150px;
            background: url('{{ asset('formimage.jpg') }}') no-repeat center center;
            background-size: cover;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-signin {
            border-radius: 20px;
            background-color: #28a745;
            color: #fff;
        }

        .btn-signin:hover {
            background-color: #218838;
        }

        .social-icons a {
            color: #666;
            font-size: 1.5rem;
            margin: 0 10px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #666;
        }

        .form-footer a {
            text-decoration: none;
            color: #007bff;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="image-container"></div>
        <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="text-left">Sign In</h4>
                <div class="social-icons">
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Display success or error message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-signin w-100">Sign In</button>
                <div class="form-footer mt-3">
                    <div>
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe" class="ms-1">Remember Me</label>
                    </div>
                    <a href="#">Forgot Password</a>
                </div>
                <div class="text-center mt-3">
                    <span>Not a member? </span><a href="#">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
