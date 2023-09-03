@extends('admin.master')

@section('title', 'New question')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="p-4 card shadow">

                <h4 class="text-center font-weight-light">Add question</h4><hr>

                <form method="POST" action="{{ route('admin.exercice-add') }}">
                    @csrf

                    <div class="form-group">
                        <label for="id_cr">Cours</label>
                        <select name="idcr" id="idcr" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($cours as $cour)
                                <option value="{{$cour->idCours}}">{{ $cour->titreCr }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('id_cour')) 
                            <p class="text-danger">{{ $errors->first('id_cour') }}</p>
                        @endif
                    </div>
                    
                     <div class="form-group">
                        <label for="type">Question type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">--Select One--</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{ $type->libbelle }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('type')) 
                            <p class="text-danger">{{ $errors->first('type') }}</p>
                        @endif
                    </div>
                     
                     <div class="form-group">
                        <label for="res1">Question</label>
                         <textarea name="question" class="form-control" id='question'>{{ old('res1') }}</textarea>
                        @if ($errors->has('res1')) 
                            <p class="text-danger">{{ $errors->first('res1') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="res1">Reponse 1</label>
                         <textarea name="res1" class="form-control" id='res1'>{{ old('res1') }}</textarea>
                        @if ($errors->has('res1')) 
                            <p class="text-danger">{{ $errors->first('res1') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="res2">Reponse 2</label>
                         <textarea name="res2" class="form-control" id='res2'>{{ old('res2') }}</textarea>
                        @if ($errors->has('res2')) 
                            <p class="text-danger">{{ $errors->first('res2') }}</p>
                        @endif
                    </div>
                    
                      <div class="form-group">
                        <label for="res3">Reponse 3</label>
                         <textarea name="res3" class="form-control" id='res3'>{{ old('res3') }}</textarea>
                        @if ($errors->has('res3')) 
                            <p class="text-danger">{{ $errors->first('res3') }}</p>
                        @endif
                    </div>

                        <div class="form-group">
                        <label for="op1">option 1</label>
                         <textarea name="op1" class="form-control" id='op1'>{{ old('res3') }}</textarea>
                        @if ($errors->has('res3')) 
                            <p class="text-danger">{{ $errors->first('res3') }}</p>
                        @endif
                    </div>
                   
                   <div class="form-group">
                        <label for="op2">option 2</label>
                         <textarea name="op2" class="form-control" id='op2'>{{ old('res3') }}</textarea>
                        @if ($errors->has('res3')) 
                            <p class="text-danger">{{ $errors->first('res3') }}</p>
                        @endif
                    </div>
 
                     <div class="form-group">
                        <label for="op1">option 3</label>
                         <textarea name="op3" class="form-control" id='op3'>{{ old('res3') }}</textarea>
                        @if ($errors->has('res3')) 
                            <p class="text-danger">{{ $errors->first('res3') }}</p>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label for="op1">option 4</label>
                         <textarea name="op4" class="form-control" id='op4'>{{ old('res3') }}</textarea>
                        @if ($errors->has('res3')) 
                            <p class="text-danger">{{ $errors->first('res3') }}</p>
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


