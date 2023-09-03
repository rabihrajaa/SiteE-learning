@extends('admin.master')

@section('title', 'Categories')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-light">levels List</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @php($i = 1)

                    @foreach ($niveaux as $niveau)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $niveau->libelleNv }}</td>
                            <td><img src="{{ asset($niveau->image_nv) }}" alt="..."></td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.edit-level', $niveau->idNiveau) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-edit"></i> </a>
                                    <form action="{{ route('admin.delete-level') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $niveau->idNiveau }}">
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