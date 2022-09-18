<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        footer{
            text-align: center;
            width: 100%;
            /* position: fixed; */
            /* bottom: 0px; */
        }
        .footerWrapper ul li{
            text-align: center;
            list-style: none;
            font-size: 16px;
            color: #fff;
        }
        .navbar-nav .nav-link.active, .navbar-nav .show > .nav-link{
            color: #fff !important;
        }
    </style>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
 
 <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
</head>

    


<body>
    <div class="bg-primary">
        <div class="container">
            {{-- Navbar started --}}
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('categories.create') }}">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('documents.create') }}">Documents</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            {{-- Navbar started --}}
        </div>
    </div>

    @yield('content')


    <footer class="bg-primary py-3"> 
        <div class="container">
            <div class="footerWrapper">
                <h4 class="text-center text-white mb-0">
                    &copy; 2022 all rights reserved
                </h4>
            </div>
        </div>
    </footer>

    <script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>