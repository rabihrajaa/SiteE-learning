@extends('admin.master')

@section('title', 'Ressources')

@section('content')

    








<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-light">Ressource List</h5>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                  
                   <th>Serial</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Ressource</th>
                        <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            @php($i = 1)

            
                    @foreach ($documents as $document)
                <tr>
                   <td>{{ $i++ }}</td>
                            <td>{{ $document->intituleRs }}</td>
                            <td>{{ $document->descriptionRs }}</td>
                            @if($document->idtype==1)
                            <td><img src="{{ asset($document->lienRs) }}" height="50" alt="..."></td>
                            @endif
                             @if($document->idtype==2)
                       <td>
        <a href="{{route('pdff',$document->lienRs)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>open pdf</a>
   </td>
                            @endif
                            @if($document->idtype==3)
                            <td>
                           <div id="panel-9-11-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="27" >              
    <iframe width="300" height="220" src="{{$document->lienRs}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div></td>
 @endif

           @if($document->idtype==4)
                            <td>
<audio controls><source src="/assets/{{ $document->lienRs}}" type="audio/mpeg"></audio>
     </td>
      @endif

                    <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.edit-lesson', $document->idRessourceC) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-edit"></i> </a>
                                    <form action="{{ route('admin.delete-lesson') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $document->idRessourceC }}">
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

@endsection67