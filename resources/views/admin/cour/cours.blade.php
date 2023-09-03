@extends('admin.master')

@section('title', 'Courses')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-light">Course List</h5>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>Category</th>
                   
                    <th>level</th>

                      <th>description</th>
                    <th>Image</th>
       
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            @php($i = 1)

            @foreach ($cours as $cour)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $cour->titreCr }}</td>
                    <td>{{ $cour->category->title }}</td>
                    <td>{{ $cour->niveau->libelleNv }}</td>
                      <td>{{ $cour->descriptionCr }}</td>
                    <td><img src="{{ asset($cour->imageCr) }}" height="50" alt="..."></td>
                   
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.edit-cour', $cour->idCours) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-edit"></i> </a>
                            <form action="{{ route('admin.delete-cour') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $cour->idCours }}">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> 
                                    <i class="fa fa-trash-alt"></i> 
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>

@endsection