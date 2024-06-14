<!DOCTYPE html>
<html>
<head>
    <title>Capturing Serenity</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('js/bootstrap.min.js')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @keyframes white-line {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover::before {
            animation: white-line 0.3s forwards;
        }
        .container{
            margin-top:6px;
            margin-bottom:6px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Capturing Serenity</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('home') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('about-us') ? ' active' : '' }}" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('our-team.index') ? ' active' : '' }}" href="{{ route('our-team.index') }}">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('blogs') ? ' active' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('contact-us') ? ' active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav">
                @if(Auth::check())
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
    </li>
    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>




    @yield('content')
    </body>