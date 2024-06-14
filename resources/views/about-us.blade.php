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
#abc{
    margin-top:80px;
    margin-bottom:50px;
}


 #efg{
    height: 90%;
    width:100%;
    
    
  }
  .custom-shadow {
    box-shadow: 0 0 20px rgba(109, 114, 114, 1);
  }

    </style>
</head>
<body>
@extends('header')
<div id="abc"class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="about-us-container">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Welcome to Capturing Serenity! We are a passionate team of photographers dedicated to capturing the beauty and serenity of the world through our lenses.</p>
        <p>At Capturing Serenity, we believe that every moment is worth cherishing. Through our photography, we strive to freeze those moments in time, preserving the emotions, the joy, and the serenity that they hold.</p>
        <p>Our team consists of experienced photographers who have a keen eye for detail and a deep understanding of the art of photography. We specialize in various genres, including landscapes, portraits, weddings, and more.</p>
        <p>Whether you are looking to capture a special occasion, create stunning portraits, or simply want to experience the beauty of the world through our photographs, we are here to bring your vision to life.</p>
        <p>Whether you are planning a special event, seeking professional portraits, or simply want to experience the beauty of the world through our lens, we are here to bring your vision to life. We are committed to providing exceptional service and ensuring that every client's unique needs and desires are met.</p>
  <p>Thank you for choosing Capturing Serenity. We look forward to creating timeless memories with you.</p>  
    </div>
    </div>
    <div class="col-md-6">
  <img id="efg" src="{{ asset('images/photo1.jpg') }}" class="img-fluid custom-shadow" alt="Photographer">
</div>

</div>


  @extends('footer')
    
    <script src="https://kit.fontawesome.com/5b7d563147.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
