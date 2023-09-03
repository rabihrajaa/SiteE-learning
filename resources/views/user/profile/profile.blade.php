@extends('web.web')

@section('title', 'Register')

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
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Your Profile</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        
      </div>
    </div>
  </div>
</section>

<div class="container my-4">

    <div class="row">
        <div class="col-md-8 offset-md-2">

            @if (!empty(Session::get('message')))
                <p class="text-center alert alert-success">
                    {{ Session::get('message') }}
                </p>
            @endif
            
            <p class="text-center">
                @if (!empty($profile->photo))
                    <img src="{{ asset($profile->photo) }}" class="w-25 img-thumbnail" alt="...">
                @else
                    <img src="{{ asset('images/default.jpg') }}" class="w-25 img-thumbnail" alt="...">
                @endif
            </p>

            <div class="text-center">
                <button id="user-profile-edit-btn" class="btn btn-sm btn-primary"> 
                    <i class="fa fa-user-edit"></i> Edit
                </button>
                <button id="user-profile-info-btn" class="btn btn-sm btn-primary"> 
                    <i class="fa fa-user"></i> Info
                </button>
            </div>

            <div class="table-responsive p-4" id="user-profile-info">
                <table class="table table-bordered profile">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $profile->dob }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $profile->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $profile->address }}</td>
                    </tr>
                    <tr>
                        <th>Institute</th>
                        <td>{{ $profile->institute }}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{ $profile->subject }}</td>
                    </tr>
                    <tr>
                        <th>Join Date</th>
                        <td>{{ $profile->created_at->format('F d, Y h:i:s A') }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div><br>


    {{--  Update form  --}}
    <form method="POST" action="{{ route('user.profile-update') }}" id="user-profile-edit-form" enctype="multipart/form-data">
        @csrf

        <div class="row bg-light">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 p-3">
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="photo" id="" class="form-control" autofocus>
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" id="" class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="text" name="dob" value="{{ $profile->dob }}" id="" placeholder="yyyy/mm/dd" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{ $profile->phone }}" id="" class="form-control">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="form-group">
                            <label for="">Institute</label>
                            <input type="text" name="institute" value="{{ $profile->institute }}" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" name="subject" value="{{ $profile->subject }}" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea name="address" id="" class="form-control" rows="4">{{ $profile->address }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 mt-1">
                    <button type="submit" class="btn btn-primary btn-block py-2"> UPDATE </button>
                </div><br>
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


@push('js')
    <script>

        $('#user-profile-edit-form').hide();
        $('#user-profile-info-btn').hide();

        $('#user-profile-edit-btn').click(function () {
            $('#user-profile-edit-form').show();
            $('#user-profile-info-btn').show();
            $('#user-profile-info').hide();
            $('#user-profile-edit-btn').hide();
        });

        $('#user-profile-info-btn').click(function () {
            $('#user-profile-info').show();
            $('#user-profile-edit-btn').show();
            $('#user-profile-edit-form').hide();
            $('#user-profile-info-btn').hide();
        });
        
    </script>
@endpush

@endsection
