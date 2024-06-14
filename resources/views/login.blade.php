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
        

        #efgh{
          margin-top:60px;
          margin-bottom:100px;
          height:50%;
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
        .container{
            margin-top:6px;
            margin-bottom:6px;
        }
        .custom-link {
  color: white !important;
}

.custom-link:hover {
  color: lightgray !important;
  text-decoration: none;
}
.gradient-custom {
  background: linear-gradient(#2b5876,#4e4376);
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
                
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('login') ? ' active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::routeIs('sign up') ? ' active' : '' }} btn btn-primary" href="{{ route('register') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
 

<section id="abcd"class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

              <form action="{{ route('login.post') }}" method="POST">
                @csrf
                

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="email_address">Email</label>  
                <input type="email" id="email_address" class="form-control form-control-lg" name="email" required autofocus>
                  
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="password">Password</label>  
                <input type="password" id="password" class="form-control form-control-lg" name="password" required>
                  
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                    
                  </div>
                </div>

                <button type="submit" class="btn btn-outline-light btn-lg btn-black px-5">Login</button>
                
              </form>
              
            </div>
            <a href="{{ route('registration') }}" class="custom-link">Don't have an account?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>
