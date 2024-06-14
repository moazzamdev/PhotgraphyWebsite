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
        .row.inline-cols {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
  }
  .link-no-style {
  color: inherit;
  text-decoration: none;
}

.link-no-style:hover {
  text-decoration: underline;
}

        </style>
        </head>
        <body>
        @yield('content')
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>

   <!-- Section: Form -->
   <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <!-- <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div> -->
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
          <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
              <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
</section>

    <!-- Section: Text -->
    <section class="mb-2">
      <p>
      Discover a world of serenity with our curated content and services.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
<section class="">
  <!--Grid row-->
  <div class="row inline-cols">
    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <a class="text-uppercase link-no-style" href="{{ route('home') }}">Home</a>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <a class="text-uppercase link-no-style" href="{{ route('about-us') }}">About Us</a>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <a class="text-uppercase link-no-style" href="{{ route('our-team.index') }}">Our Team</a>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <a class="text-uppercase link-no-style" href="{{ route('blogs') }}">Blogs</a>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
      <a class="text-uppercase link-no-style" href="{{ route('contact-us') }}">Contact Us</a>
    </div>
    <!--Grid column-->
  </div>
  <!--Grid row-->
</section>
<!-- Section: Links -->


    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">capturingserenity.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    
    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>