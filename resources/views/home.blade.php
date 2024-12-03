<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success - Devskill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset/css/home.css') }}" rel="stylesheet">
</head>

<body>
    <div class="success-container">
        <div class="success-header">
            Devskill
        </div>
        @if (session('success'))
            <div class=" mt-4 alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class=" mt-4 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="success-message">
            <h4>Success!</h4>
            <p>Your login was successful. You are now ready to access your dashboard and continue your learning journey.
            </p>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

        @if (Auth::user()->is_admin)
            <div class="admin-form">
                <h5 class="text-center mb-4">Add New User</h5>
                <form method="POST" action="{{ route('admin.storeUser') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" placeholder="Confirm password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </form>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
