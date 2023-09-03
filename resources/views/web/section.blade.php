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
         <div class="col-md-8 offset-md-2 p-4">

                <h5 class="media" data-aos="fade-right">
                    <span><i class="fa fa-play-circle text-primary"></i></span>
                    <div class="media-body ml-2 c-heading">
                       {{$cour->Category->title}}
                    </div>
                </h5> <hr>

                <div class="row">
                    <div class="col-md-5 py-3 pl-0 pr-0" data-aos="fade-right">
                        <img src="/{{$cour->imageCr}}" class="w-100" alt="...">
                    </div>
                    <div class="col-md-7 p-3 text-justify" data-aos="fade-left">
                        {!!$cour->descriptionCr!!} 
                    </div>
                    <div>
            <a href="{{ route('content', $cour->idCours) }}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">Exercice</a>
          </div>
                </div>
            
            <div id="accordion">
               


     <!--    ------------------ -->
               



 <div class="card">
                    <button class="card-header collapsed card-link"
                            data-toggle="collapse"
                            data-target="#collapsefour">

                        <b class="header-title float-left">
                                   {{$cour->titreCr}}                        </b>
                        <i class="fas fa-plus float-right "></i>

                    </button>
                    <div id="collapsefour" class="collapse"
                            data-parent="#accordion">
                    <div id="" class="collapse show" aria-labelledby=""
                                data-parent="#accordionExample">
                                <ul class="list-group p-1">

@foreach($sections as $section)
                                   
                                        <li class="list-group-item">
                                            <a href="{{ route('all-base', $section->idSequence ) }}">
                                                <div class="media lesson">
                                                    <strong> 1 <i class="fa fa-play-circle text-warning"></i> </strong>
                                                    <div class="media-body ml-2">{{$section->intituleSq}}</div>
                                                </div>
                                            </a>
                                        </li>

                                       @endforeach
                                </ul>
                            </div>
                    </div>
                </div>




<br>
<br>



<div class="media mb-4">

                
                <div class="media-body">
                   
                    <form action="{{route('website.comment')}}" method="post">
                        @csrf
                         
                        <input type="hidden" name="lesson_id" value="{{$cour->idCours}}">
                        <textarea name="comment" id="editor1" rows="3" class="form-control" placeholder="Join the discussion"></textarea>
                        <input type="submit" value="Click to comment" class="btn btn-primary btn-block btn-sm mt-2">
                    </form>
                </div>
            </div>

 <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body comment-container" >

                    
                    @foreach($comments as $comment)

                        <div class="card card-body bg-light mt-50" >
                          <i class="card-text"><b > {{ $comment->user->name }} </b> <small class="ms-3 text-primary" style="margin-left:90px;" >commented on: {{$comment->created_at }}</small></i>&nbsp;&nbsp;
                            <span class="card-text" style="margin-bottom: 20px;" > {{ $comment->comment }} </span>
                        @if(Auth::check() && auth::id()== $comment->user_id)    
                            <div style="margin-left:10px;">
                  
                                <form action="{{ route('website.comment-reply') }}" method="post">
                                   @csrf
                              
                                <input type="hidden" name="id" value="{{ $comment->id }}">
                                <button type="submit" class="btn btn-sm btn-danger me-100" onclick="return confirm('Are you sure?')"> 
                                    <i class="">delete</i> 
                                </button>
                            </form>
                        </div>
                      @endif



                                    <!-- Dynamic Reply form -->
                                    
                                </div>
                          
                       
                      <br>
                    @endforeach



                </div>
            </div>
        </div>
    </div>


            </div>




        </div>
 
    
    <script>
        $('.card-header').click(function() {
            $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
        });
    </script>
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
