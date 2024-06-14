<!DOCTYPE html>
<html>
<head>
    <title>Capturing Serenity</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/css/bootstrap.min.css">
    <style>
        

        .gradient-custom {
            
  background: linear-gradient(#2b5876,#4e4376);
}
.card {
  background: transparent;
  border: none;
}

#abcd{
    
    margin-top:50px;
}
    </style>
</head>
<body>
    @extends('header')
        <section id="abcd" class=" gradient-custom">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Add Team Member</h2>

              <form id="form" action="{{ route('our-team.store') }}" method="POST">
                @csrf
                

                <div class="form-group form-white mb-4">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="form-group form-white mb-4">
                  <label for="phone" class="form-label">Phone:</label>
                  <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                </div>

                <div class="form-group form-white mb-4">
                  <label for="address" class="form-label">Address:</label>
                  <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                </div>

                <div class="form-group form-white mb-4">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group form-white mb-4">
                  <label for="portfolio_link" class="form-label">Portfolio Link:</label>
                  <input type="text" name="portfolio_link" id="portfolio_link" class="form-control" value="{{ old('portfolio_link') }}">
                </div>

                <div>
                  <button id="bt1" type="submit" class="btn btn-outline-light">Add</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


   @extends('footer')

    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
