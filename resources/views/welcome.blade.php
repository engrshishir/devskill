<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        }

        .login-container .image-container {
            height: 150px;
            background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fadmin-login&psig=AOvVaw2ry10Hv1T0es1qkSRZebzr&ust=1733325117647000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCOi37bHxi4oDFQAAAAAdAAAAABAE') no-repeat center center;
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
            font-size: 1.2rem;
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
            <h4 class="text-center">Sign In</h4>
            <div class="social-icons text-center my-3">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
