@extends('admin.master')

@section('title', 'New Lesson')

@section('content')

<div class="row">
<div class="col-md-10 offset-md-1">
    <div class="p-4 card shadow">

        <h4 class="text-center font-weight-light">Create Lesson</h4><hr>

        <form method="POST" action="{{ route('admin.save-lesson') }}" enctype="multipart/form-data">
            @csrf

           

                 <div class="form-group">
                <label for="titleRc">Ressource title</label>
                <input type="text" name="titleRc" value="{{ old('titleRc') }}" class="form-control form-control-user" id="titleRc">
                @if ($errors->has('title')) 
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="res">Ressource type</label>
                <select name="res" id="res" class="form-control">
                    <option value="">--Select One--</option>
                     <option value="image">Image</option>
                      <option value="document">Document</option>
                       <option value="video">Video</option>
                        <option value="audio">Audio</option>

                </select>
                @if ($errors->has('ressource')) 
                    <p class="ressource">{{ $errors->first('ressource') }}</p>
                @endif
            </div>
           
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                @if ($errors->has('description')) 
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="url">URL de la video</label>
                <input type="text" name="url" class="form-control" id="url">
                @if ($errors->has('description')) 
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>

           <div class="form-group">
                        <label for="image">Ressource</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        @if ($errors->has('image')) 
                            <p class="text-danger">{{ $errors->first('image') }}</p>
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

@push('js')
    <script>

        $('#course_id').change(function() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('admin.sections-by-course-id') }}",
                method: "POST",
                data: {course_id: $(this).val(), _token: _token},
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $('#section_id').html(data);
                    }
                }
            });
        });

        var url = '{{ url('/') }}';
        var options = {
            filebrowserImageBrowseUrl: url+'/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: url+'/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: url+'/laravel-filemanager?type=Files',
            filebrowserUploadUrl: url+'/laravel-filemanager/upload?type=Files&_token='
        };

        CKEDITOR.replace('description', options);
        
    </script>
@endpush
