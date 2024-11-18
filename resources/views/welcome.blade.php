<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHMAROC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Company Logo -->
        <img src="{{ asset('assets/images/ShmarocLogo.jpg') }}" alt="Company Logo" class="logo">

        <h1 class="mb-4">Welcome to SHMAROC</h1>
        <p class="mb-4">Please choose an option to continue :</p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-custom">Login</a>
            <a href="{{ route('register') }}" class="btn btn-custom">Register</a>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
