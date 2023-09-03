

@extends('web.web')


@section('content')

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Master english</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
    

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->

<!-- /header -->
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section  data-background="images/backgrounds/Image_36.png" style="padding: 200px 200px 150px 150px ;">

  <div class="container" style="height: 400px; width:100% ;">
    <h3 style="color:#ffffff;   padding: 100px 0px 150px ;  font-size: 60px;">English For Students
    <p style="color:#ffffff;  font-size: 20px;">Here you can find all the informations you need about the English skills.</p>
          </h3>
  </div>

</section>
<!-- /page title -->

<!-- about -->

<!-- teachers -->
<section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="section-title" style="margin-left:50px ;">Our courses</h2>
        </div>
        
        <!-- catégorie -->
        <div style="width: 66%;">
          <div style="margin-left: -60px;">
             @forelse ($categories as $category)
          <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="{{ route('levels', $category->id) }}" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >{{ $category->title }}</a>

        </form>
 <br>
         @empty
                <div class="col-12">
                  <h5 class="text-center">
                    No categories found
                  </h5>
                </div>
          @endforelse

        
       
        <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >Grammar</a>
        </form>
        <br>
          <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >Listening</a>
        </form>
        <br>
          <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >Writing</a>
        </form>
        <br>
          <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >Vocabulary</a>
        </form>
        <br>
         <form style="border:5px;border-style:solid;border-color: #9484F8;width: 510px; height:70px;">
          <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7" style="width: 500px;background-color: #BCBCE2;color: #A14E05; font-size:20px" >Speaking</a>
        </form>
        </div>
        </div>
              <div class="col-lg-4 col-md-5">
                          <div style="margin-right: -60px;">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <h5>Search</h5>
                            <form action="#">
                                <input type="text" placeholder="Searching...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__categories">
                            <h5>Recent Cources</h5>
                            <ul>
                                <li><a href="#">Simple present</a></li>
                                <li><a href="#">Writing an email</a></li>
                                <li><a href="#">Successful interview</a></li>
                                <li><a href="#">Simple past</a></li>
                                <li><a href="#">Sport vocabulary</a></li>
                            </ul>
                        </div>
                   
                        <div class="blog__sidebar__social">
                            <h5>Follow Us</h5>
                            <div class="blog__sidebar__social__links">
                                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fab fa-google"></i></a>
                                <a href="#" class="skype"><i class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
</section>

<!-- footer -->

<!-- /footer -->

<!-- jQuery -->
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
</html>



@endsection