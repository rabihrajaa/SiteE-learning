@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
    
    <!-- Page Heading -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Admin Dashboard
                    </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <row class="">
        <div class="col-md-8 mx-auto">

          <a class="navbar-brand" href="index.html"><img src="/images/logo.png" alt="logo" width="40%" height="40%" style="margin-right: 1000;"></a>
       
            <div class="jumbotron">

            <h1 class="display-4 text-primary">Welcome to Admin Panel of Master English</h1>
            
            <hr class="my-4">
            </div>
        </div>
        </row>
    </div>
    <!-- /.container-fluid -->
</section>
@endsection