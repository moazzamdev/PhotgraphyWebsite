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
.photo-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .photo {
            width: 30%;
            height:30%;
            margin-bottom: 20px;
            position: relative;
        }

        .photo img {
            width: 100%;
            height: auto;
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .photo:hover .photo-overlay {
            opacity: 1;
        }

        .photo-overlay-content {
            text-align: center;
        }

        .download-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .tagline {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 75px;
            text-align:center;
            font-family: Brush Script MT;
        }  

        /* Description styles */
        .description {
            font-size: 1rem;
            margin-top: 10px;
            text-align:center;
            margin-bottom:30px;
        } 

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
        .abcd{
            text-align:center;
            margin-bottom:30px;
        }
        
    </style>
</head>
<body>
    @extends('header')
    
   
    <div class="tagline">Unleash the Beauty of Serenity</div>
        <div class="description">Discover breathtaking moments captured with passion and precision.</div>
    <div class="container">
    
        <div class="photo-grid">
            <div class="photo">
                <img src="{{ asset('images/abcd.jpg') }}" alt="Photo 1">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/abcd.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1668428866065.jpg') }}" alt="Photo 2">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1668428866065.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1683133315373.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1683133315373.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/efg.jpg') }}" alt="Photo 3">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/efg.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1679777530440.jpg') }}" alt="Photo 4">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1679777530440.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/IMG_20230502_160110.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/IMG_20230502_160110.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1679990855565.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1679990855565.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1679155383221.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1679155383221.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('images/1670172711553.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('images/1670172711553.jpg') }}" download class="download-button">Download</a>
                    </div>
                </div>
            </div>
            
            <!-- Add more photo divs as needed -->
        </div>
    </div>
    <h2 class="abcd">More to come!!!</h2>
    
@extends('footer')


    
    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>