@extends('admin.master')

@section('title', 'New Section')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="p-4 card shadow">

                <h4 class="text-center font-weight-light">Affectation a ressource to a section</h4><hr>

                <form method="POST" action="{{ route('admin.affectation') }}">
                    @csrf

                    <div class="form-group">
                        <label for="id_section">Sections</label>
                        <select name="id_section" id="id_section" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($sections as $section)
                                <option value="{{ $section->idSequence}}">{{ $section->intituleSq}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('course_id')) 
                            <p class="text-danger">{{ $errors->first('course_id') }}</p>
                        @endif
                    </div>
                    
                     <div class="form-group">
                        <label for="id_res">Ressources</label>
                        <select name="id_res" id="id_res" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($ressources as $ressource)
                            @if($ressource->idSequence=='')
                                <option value="{{ $ressource->idRessourceC}}">{{ $ressource->intituleRs }}</option>
                                @endif
                            @endforeach

                        </select>
                        @if ($errors->has('course_id')) 
                            <p class="text-danger">{{ $errors->first('course_id') }}</p>
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
        CKEDITOR.replace('description')
    </script>
@endpush


