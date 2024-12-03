<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success - Devskill</title>
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

        .success-container {
            width: 100%;
            max-width: 500px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .success-header {
            background-color: #28a745;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 1.5rem;
        }

        .success-message {
            padding: 40px;
            text-align: center;
        }

        .success-message h4 {
            color: #28a745;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .success-message p {
            font-size: 1.1rem;
            color: #333;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }

        .back-to-home {
            color: #007bff;
            text-decoration: none;
        }

        .back-to-home:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="success-container">
        <div class="success-header">
            Devskill
        </div>
        <div class="success-message">
            <h4>Success!</h4>
            <p>Your login was successful. You are now ready to access your dashboard and continue your learning journey.
            </p>
            <div class="text-center mt-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
