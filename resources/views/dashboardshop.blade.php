<!DOCTYPE html>
<html>

<head>
    <title>Cllau</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg mb-5" style="background-color: #3A4F7A;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Cllau-shop</a>

            <ul class="nav justify-content-end">
                <!-- @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register-admin') }}">Register</a>
                </li>
                @else
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
                @endguest -->
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('cart') }}" style="color:white"><i class="bi bi-basket"></i><sup>{{ count((array) session('cart')) }}</sup></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>