<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <ul class="nav justify-content-center bg-dark p-3">
        <li class="nav-item">
            <a href="{{ URL('/') }}" class="nav-link">Main Page</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('crud.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('crud.create') }}" class="nav-link">Add New</a>
        </li>
        <li class="nav-item">
            <a href="{{ URL('/about') }}" class="nav-link">About</a>
        </li>
    </ul>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>