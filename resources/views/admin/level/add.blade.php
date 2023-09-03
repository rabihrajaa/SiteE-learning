@extends('admin.master')

@section('title', 'New level')

@section('content')

    <div class="row">
        <div class="card col-lg-6 offset-md-3">
            <div class="p-4">

                <h4 class="text-center font-weight-light">Create Level</h4><hr>

                <form method="POST" action="{{ route('admin.save-level') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Level Name</label>
                        <input type="text" name="title" value="{{ old('title')  }}" class="form-control form-control-user" id="title">
                        @if ($errors->has('title')) 
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Level Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        @if ($errors->has('title')) 
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            <i class="fa fa-plus"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection