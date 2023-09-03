@extends('admin.master')

@section('title', 'Edit Section')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="p-4 card shadow">

                <h4 class="text-center font-weight-light">Edit Section</h4><hr>

                <form method="POST" action="{{ route('admin.update-section') }}">
                    @csrf
                    @method('put')

                    <input type="hidden" name="id" value="{{ $section->idSequence }}">
    
                    <div class="form-group">
                        <label for="title">Section title</label>
                        <input type="text" name="title" value="{{ $section->intituleSq }}" class="form-control form-control-user" id="title">
                        @if ($errors->has('title')) 
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                   <div class="form-group">
                        <label for="id_cr">Cours</label>
                       <select name="id_cr" id="id_cr" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($cours as $cour)

                                <option @if ($cour->idCours == $section->idCours) selected @endif value="{{ $cour->idCours}}">{{ $cour->titreCr }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('id_cr')) 
                            <p class="text-danger">{{ $errors->first('id_cr') }}</p>
                        @endif
                    </div>

    
                     <div class="form-group">
                        <label for="description">Description</label>
 <textarea name="description" value="{{ $section->descriptionSq }}" class="form-control" id="description">{{ $section->descriptionSq }}</textarea>

                        @if ($errors->has('description')) 
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
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
        CKEDITOR.replace('description')
    </script>
@endpush


