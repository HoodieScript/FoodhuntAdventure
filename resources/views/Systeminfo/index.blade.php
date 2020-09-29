@extends('layouts.default')
@section('contentmo')
<div class="w-75 bg-white container rounded p-3  mt-5">
   <div class="row d-flex justify-content-between">
   <div class=" col-md-6">
     <h2>{{ __('Activity Log') }}</h2>
   </div>
   <div class="col-md-2 align-self-center">
         @if(Auth::user()->usersrole == "superadmin")

            <button class="btn btn-md btn-primary float-right" data-toggle="modal" data-target="#add-data-modal">
            ADD INFORMATION <i class="fal fa-layer-plus pl-3"></i>
            </button>
        @endif
         </div>
 
   <div class=" col-md-4 align-self-center">
   <form action="/search-for-systemInfo-data" method="get">
                <div class="input-group">
                    <input type="search" name="search" placeholder="search title" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-sm btn-info rounded">Search</button>
                    </span>
                </div>
            </form>
   </div>
  
   <div class="row mt-5"> 
@foreach( $systeminfos as $systeminfo)
    <div class="card col-lg-12 p-0  rounded mb-2">
  
        <div class="card-header p-3">
            <h3>{{ $systeminfo->title }}</h3>
        </div>

        <div class="card-body">
            <p>{!! $systeminfo->body !!}</p>
        </div>
        
        <div class="p-1">
        <small>written on {{ $systeminfo->created_at }}</small>

        <form action="{{ action('SysteminfosController@destroy', $systeminfo->id ) }} "  method="post" class="form-control border-0" >
            
        @csrf
        @method('DELETE')
        <a href="{{ action('SysteminfosController@show', $systeminfo->id) }}" class="btn btn-success btn-sm float-right m-1 text-center text-white"><i class="far fa-eye"></i></a>
        @if(Auth::user()->usersrole == "superadmin")
        <a href="{{ action('SysteminfosController@edit', $systeminfo->id) }}" class="btn btn-warning btn-sm float-right m-1 text-center text-white"><i class="far fa-edit"></i></a>
        <button type="submit" class="btn btn-sm btn-danger float-right m-1"><i class="far fa-trash-alt"></i></button>
        @endif
        </form>
        </div>
        
    </div>
@endforeach
{{ $systeminfos->links() }}
    </div>
   </div>




<!-- 
    

-->

  <!--/////////////////////////////////////////////---------A D D---------/////////////////////////////////////////////-->
  <div class="modal fade modal-create" id="add-data-modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Create new inforrmation</h4>
        </div>
        <div class="modal-body">

    <form action="{{ action('SysteminfosController@store') }}" class="needs-validation" novalidate id="form1" method="post" >
    @csrf

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
    </div>
    <input type="text" rows="3" class="form-control" id="title"  name="title" placeholder="title" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    <div class="valid-feedback">
        fill up complete!
      </div>
      <div class="invalid-feedback">
          Please enter title.
        </div>
    </div>
    <div class="form-group">
          <textarea class="form-control"  name="body" rows="8" placeholder="Nachricht" required></textarea>
          <div class="valid-feedback">
        fill up complete!
      </div>

         <div class="invalid-feedback">
        Please Enter Description
          </div>
        </div>
    
   





        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-info rounded"><i class="fas fa-search"></i></button>
        </div>
      </div>
      
    </div>
  </div>

 </form>

</div>
</div>


@endsection