@extends('admin.master')

@section('title', 'Edit Ressource')

@section('content')

<div class="row">
<div class="col-md-10 offset-md-1">
    <div class="p-4 card shadow">

        <h4 class="text-center font-weight-light">Edit Lesson</h4><hr>

        <form method="POST" action="{{ route('admin.update-lesson') }}">
            @csrf
            @method('put')

            <input type="hidden" name="id" value="{{ $document->idRessourceC }}">

            <div class="form-group">
                <label for="titleRc">Ressource title</label>
                <input type="text" name="titleRc" value="{{ $document->intituleRs }}" class="form-control form-control-user" id="titleRc">
                @if ($errors->has('titleRc')) 
                    <p class="text-danger">{{ $errors->first('titleRc') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description">{{ $document->descriptionRs }}</textarea>
                @if ($errors->has('description')) 
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>
            @if($document->idtype==3)
                           <div id="panel-9-11-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="27" >              
    <iframe width="300" height="220" src="{{$document->lienRs}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="form-group">
                <label for="url">Lien URL</label>
                <textarea name="url" class="form-control" id="url">{{ $document->lienRs }}</textarea>
                @if ($errors->has('description')) 
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>
 @endif
           

 @if($document->idtype==4)
 <div class="form-group">
                <label for="image">Course Audio</label>
                        <p class="m-0 p-2">
<audio controls><source src="/assets/{{ $document->lienRs}}" type="audio/mpeg"></audio>
<input type="file" name="image" class="form-control-file" id="image">
                        @if ($errors->has('image')) 
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
                         </div>
 @endif
                @if($document->idtype==1)
            <div class="form-group">
                <label for="image">Course Image</label>
                        <p class="m-0 p-2">
                            <img src="{{ asset($document->lienRs) }}" height="100" width="150" alt="...">
                        </p>
                        <input type="file" name="image" class="form-control-file" id="image">
                        @if ($errors->has('image')) 
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
            </div>
            @endif

             @if($document->idtype==2)
            <div class="form-group">
                <p class="m-0 p-2">
                             <a href="{{route('pdff',$document->lienRs)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>open pdf</a>
                        </p>
                <label for="image">Course file</label>
                        <input type="file"  name="image" class="form-control-file" id="image">
                        @if ($errors->has('image')) 
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
            </div>
            @endif

          
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <i class="fa fa-plus"></i> Update
                </button>
            </div>
        </form>

    </div>
</div>
</div>

@endsection

@push('js')
    <script>

        sectionsByCourse();

        $('#course_id').change(function() {
            sectionsByCourse();
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
