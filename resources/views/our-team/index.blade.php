<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/css/bootstrap.min.css">
    <style>
        /* Global styles */
        .our-team {
        padding: 60px 0;
        background-color: #f9f9f9;
        text-align: center;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .our-team h2 {
        margin-bottom: 30px;
        font-size: 36px;
        font-weight: bold;
    }

    .our-team .team-member {
        margin-bottom: 30px;
    }

    .our-team .team-member img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .our-team .team-member h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .our-team .team-member p {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .our-team .social {
        margin-top: 20px;
    }

    .our-team .social a {
        color: #333;
        display: inline-block;
        margin: 0 5px;
    }

    .our-team .social a:hover {
        color: #00aced;
    }


    </style>

    <title>Capturing Serenity - Our Team</title>
</head>
<body>
@extends('header')
    
<script>
    $(document).ready(function () {
        var photographerIndex = {{ count($photographers) }};
        var photographerId = {{ $photographers->last()->id + 1 }};

        $('#add-photographer').click(function (e) {
            e.preventDefault();

            var photographerTemplate = `
            <div class="col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="http://www.webcoderskull.com/img/team4.png" alt="">
                    <h3>Photographer ${photographerIndex}</h3>
                    <p>Phone: XXX-XXXX</p>
                    <p>Address: Address ${photographerIndex}</p>
                    <p>Email: photographer${photographerIndex}@example.com</p>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <a href="#">Portfolio Link</a>
                    <div class="actions">
                        <a href="#" class="edit-btn">Edit</a>
                        <a href="#" class="delete-btn">Delete</a>
                    </div>
                </div>
            </div>`;

            $('.row.our-team-members').append(photographerTemplate);
            photographerIndex++;
            photographerId++;
        });

        $(document).on('click', '.edit-btn', function (e) {
            e.preventDefault();
            var teamMember = $(this).closest('.team-member');
            var name = teamMember.find('h3').text();
            var phone = teamMember.find('p:nth-child(3)').text().replace('Phone: ', '');
            var address = teamMember.find('p:nth-child(4)').text().replace('Address: ', '');
            var email = teamMember.find('p:nth-child(5)').text().replace('Email: ', '');

            // Implement your edit logic here
            console.log('Edit', name, phone, address, email);
        });

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            var teamMember = $(this).closest('.team-member');
            teamMember.remove();

            // Implement your delete logic here
        });
    });
</script>

<section class="our-team">
    <div class="container ">
        <div class="row heading heading-icon">
            <h2>Our Team</h2>
        </div>
        <div class="row our-team-members">
            @foreach ($photographers as $photographer)
                <div class="col-md-6 col-lg-3">
                    <div class="team-member shadow p-3">
                        <img src="http://www.webcoderskull.com/img/team4.png" alt="">
                        <h3>{{ $photographer->name }}</h3>
                        <p>Phone: {{ $photographer->phone }}</p>
                        <p>Address: {{ $photographer->address }}</p>
                        <p>Email: {{ $photographer->email }}</p>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a href="{{ $photographer->portfolio_link }}">Portfolio Link</a>
                        <h1></h1>
                        <div class="actions">
                            <a href="{{ route('our-team.edit', $photographer->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('our-team.destroy', $photographer->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('our-team.create')}}" id="add-photographer" class="btn btn-primary">Add Photographer</a>
        </div>
    </div>
</section>
@extends('footer')
    
    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
