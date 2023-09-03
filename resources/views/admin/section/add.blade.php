@extends('admin.master')

@section('title', 'New Section')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="p-4 card shadow">

                <h4 class="text-center font-weight-light">Create Section</h4><hr>

                <form method="POST" action="{{ route('admin.save-section') }}">
                    @csrf

                    <div class="form-group">
                        <label for="title">Section title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title">
                        @if ($errors->has('title')) 
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                     <div class="form-group">
                        <label for="title">Description</label>
                         <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                        @if ($errors->has('desc')) 
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="id_cr">Cours</label>
                        <select name="id_cr" id="id_cr" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($cours as $cour)
                                <option value="{{ $cour->idCours}}">{{ $cour->titreCr }}</option>
                            @endforeach

                        </select>
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
        CKEDITOR.replace('description')
    </script>
@endpush


