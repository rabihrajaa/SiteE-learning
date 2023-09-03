<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  
  <!-- Main Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="/images/favicon.png" type="/image/x-icon">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">
</head>
<body>
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="navbar-brand" href="index.html"><img src="/images/logo.png" alt="logo" width="60%" height="60%" style="margin-right: 1000;"></a>
        </div>





        <div class="col-lg-8 text-center text-lg-right">
          
          <ul class="list-inline" style="margin-top: 60px; margin-right:-100px ;">
            <li class="list-inline-item"> <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              <i class="fa fa-sign-out-alt"></i> {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/profile" >Profile</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         
        <div class="collapse navbar-collapse" id="navigation">

          <ul class="navbar-nav ml-auto text-center"  style="  background:#4BAECC;">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="{{route('English')}}">English Student</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="#">Level test</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="#">Reading</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Reading
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Level A1</a>
                <a class="dropdown-item" href="#">Level A2</a>
                <a class="dropdown-item" href="#">Level B1</a>
                <a class="dropdown-item" href="#">Level B1+</a>
                <a class="dropdown-item" href="#">Level B2</a>
              </div>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
@yield('content')







<footer class="footer">
     <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="/images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">contact@yourdomain.com</li>
          </ul>
        </div>
        <div class="footer-col">
          <h4 style="color:#b92fa2" >Recent Articles </h4>
          <ul>
            <li><a href="#">fun fact aboput Greece</a></li>
            <li><a href="#">modale verbs exercice 1</a></li>
            <li><a href="#">modale verbs exercice 1</a></li>
            <li><a href="#">modale verbs exercice 1</a></li>
          </ul>
        </div>
    
     
      
        <div class="footer-col">
          <h4 style="color:#232687">follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

     


        </div>
  
     </div>

        <div class="footer-bottom">
      <p> copyright 2022 </p>
      </div> 
          

  </footer>













</body>
</html>