@extends('web.web')

@section('title', 'Contact')

@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Master english</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/bootstrap/bootstrap.css">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/font-awesome/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="/plugins/aos/aos.css">
  <!-- venobox popup -->s
  <link rel="stylesheet" href="/plugins/venobox/venobox.css">
    

  <!-- Main Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">

<!-- <-----toogle-->
<link rel="stylesheet" href="
https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity=
"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
            <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
      <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
   <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
     
<!-- lko -->


</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="/images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->

<!-- /header -->
<!-- Modal -->

<!-- Modal -->


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>
  
</section>
    <div class="container my-5">
        
        <form action="{{ route('website.send-contact-message') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="title-lg mb-3">Get in Touch</h3>

                    @if (Session::get('message'))
                        <p class="alert alert-success text-center">
                            {{ Session::get('message') }}
                        </p>
                    @endif

                    <div class="form-group">
                        <input type="text" name="name" id="" placeholder="Your name" class="input-custom" autofocus>
                        @if ($errors->has('name')) 
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="" placeholder="Your E-mail" class="input-custom">
                        @if ($errors->has('email')) 
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="" placeholder="Your Phone" class="input-custom">
                        @if ($errors->has('phone')) 
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" rows="4" placeholder="Your message write here" class="input-custom"></textarea>
                        @if ($errors->has('message')) 
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-custom">Send Message</button>
                    </div>
                </div>
                <div class="col-md-4 offset-md-2" data-aos="fade-left">

                    <h1 class="mb-3 font-weight-light">Contact Info</h1>

                    <p class="text-muted">
                       >Do you have other questions? Don't worry, just send us your questions or concerns by starting a new case and we will give you the help you need.
                    </p>

                    <h5 class="mt-5">Direct Line</h5>
                    <h2>+212 xxxxxxxxx</h2><hr>

                    <ul class="mt-5">
                        <li>Laayoune, Morocco</li>
                        <li>+212 xxxxxxxxx</li>
                        <li>masterenglish@gmail.com</li>
                    </ul>

                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </form>

    </div>

   


    <script src="/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="/plugins/slick/slick.min.js"></script>
<!-- aos -->
<!-- venobox popup -->
<!-- filter -->
<!-- google map -->
<script src="/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="/js/script.js"></script>

</body>
<script type="text/javascript" src="{{ asset('assets') }}/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/bootstrap/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init({
        duration: 2000,
      });
    </script>

    <script>
      $(function() {
        // Preloder
        $(".loader").fadeOut();
        $("#preloder").delay(400).fadeOut("slow");
      });

      $('#category-nav-link').click(function() {
        $('#category-nav-link').toggleClass('active');
      });
    </script>


</html>

@endsection
