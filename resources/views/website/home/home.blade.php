
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

    <!-- home page header with login form -->
    <div class="home-header mb-4">

        <h1 data-aos="fade-right">Get The Best Free Online Courses</h1>

       

        @if (Session::get('auth-message'))
            <p class="bg-danger p-2 text-light mt-4 col-md-6 offset-md-3">
              {{ Session::get('auth-message') }}
            </p>
        @endif

        @guest
            <form method="POST" action="{{ route('login') }}" class="mt-5">
              @csrf
              
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="email" name="email" value="{{ old('email') }}" id="" class="input-custom" placeholder="E-mail">
                      @if ($errors->has('email'))
                          <p class="bg-danger p-2 text-light">{{ $errors->first('email') }}</p>
                      @endif
                    </div>
                    <div class="col-md-5">
                      <input type="password" name="password" id="" class="input-custom" placeholder="Password">
                      @if ($errors->has('password'))
                          <p class="bg-danger p-2 text-light">{{ $errors->first('password') }}</p>
                      @endif
                      <p class="text-left">
                        <a href="{{ route('password.request') }}" class="text-warning">Forgot Your Password?</a>
                      </p>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn-custom"> Login </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        @else
            <p class="bg-success p-2 my-5 text-light col-6 offset-3">
              You are logged in!
            </p>
        @endguest
    </div>
    <!-- home page header end -->
<div class="container my-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <h1 class="title-lg">Join Our Community Now!</h1>
      <p class="text-center text-muted col-md-10 offset-md-1">
        If you are struggling to master English then this course is for you! This course offers many new methods for training your speaking, listening, and writing abilities so that you can improve in all areas of the English language.
      </p>
      <p class="text-center mt-4">
        <a href="{{ route('register') }}" class="btn-custom">Register Now</a>
      </p>
    </div>
    <!-- courses cards -->
    <div class="container">


      <div class="clearfix">
        <div class="float-right p-3">
          {{ $courses->links() }}
        </div>
      </div>

    </div>
    <!-- courses-cards-end -->
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




@push('js')
    @include('website.includes.course-rating-js')
@endpush