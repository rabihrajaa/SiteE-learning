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
  <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="/plugins/venobox/venobox.css">
    

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="h/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">





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
<section  data-background="/images/backgrounds/Image_3.png" style="padding: 200px 200px 150px 150px">

  <div class="container" style="height: 400px; width:100% ;">
    <h3 style="color:#ffffff;   padding: 100px 0px 150px ;  font-size: 60px;">
    <p style="color:#ffffff;  font-size: 20px;"></p>
          </h3>
  </div>

</section>
<!-- /page title -->

<!-- about -->

<!-- teachers -->

<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Exercice</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  
  <!-- course item -->




  
  <!-- course item -->
    
  <section class="section-sm">
   <div class="container">
<form method="POST" action="{{ route('verify') }}" enctype="multipart/form-data">
@csrf
@foreach ($exercices as $exercice)

<input type="hidden" name="id" id="id" value="{{ $exercice->idCours }}" >
@break
@endforeach
@foreach ($exercices as $exercice)
<hr>
               <h4>{!! $exercice->question !!}  </h4>   
@foreach ($reponses as $reponse)
@if($exercice->idquestion==$reponse->idquestion)
@if($exercice->id==1)

<br>


<input type="radio" name="op1" id="op1">
<label for="op1"><strong>{!! $reponse->option1 !!}</strong></label>

<br>


<input type="radio" name="op2" id="op2">
<label for="op2"><strong>{!! $reponse->option2 !!}</strong></label>

<br>


<input type="radio" name="op3" id="op3">
<label for="op3"><strong>{!! $reponse->option3 !!}</strong></label>

<br>

@endif
@if($exercice->id==2)

<br>
<strong>{!! $reponse->option1 !!}</strong>
<br>
<strong>{!! $reponse->option2 !!}</strong>
<br>
<strong>{!! $reponse->option3 !!}</strong>
<br>
<strong>{!! $reponse->option4 !!}</strong>
<br>
<input type="text" name="reponse" placeholder="Your answer " class="form-control" autofocus>
<br>
<br>

@endif

@endif
@endforeach



@endforeach
<br>
<br>
<div class="form-group">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            <i class="fa fa-plus"></i> Save
                        </button>
                    </div>


     
  
</form>
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