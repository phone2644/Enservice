<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('css/navber.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        {{-- <a href="#" class="logo">Logo</a> --}}
        <img src="http://127.0.0.1:8000/image/iconENService-1.png" alt="location-team" width="8%"
            class="smartphone">

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Portfolio</a>
            <a href="#">Services</a>
            <a href="#">Contant</a>
        </nav>
    </header>
    <div class="container py-2 z-index pdt-10">
        @yield('content')
    </div>
</body>

</html>
