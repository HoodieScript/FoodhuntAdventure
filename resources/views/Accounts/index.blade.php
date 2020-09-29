@extends('layouts.default')


@section('contentmo')


<div class="w-75 bg-white container rounded p-3  mt-5">
   <div class="row d-flex justify-content-between">
   <div class="p-2 col-md-6">
     <h2>{{ __('Account List') }}</h2>
   </div>
 

   <div class="p-2 col-md-4">
  
    <form action="/search-for-accounts-data" method="get">
            @csrf
                <div class="input-group">
                    <input type="search" name="search" placeholder="search name, email" maxlength="30" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-sm btn-info rounded"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </form>
   </div>



   
   <div class="col-md-2 p-2">
         @if(Auth::user()->usersrole == "superadmin")

            <button class="btn btn-md btn-primary float-right" data-toggle="modal" data-target="#add-data-modal">
            {{ __('Create User')}} <i class="fas fa-user-plus"></i>
            </button>
        @endif
         </div>


   <div class="table-responsive">
   <table class="table table-hover bg-white rounded text-center">

   <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>password</th>
        <th>User role</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
         @foreach($accounts as $accountinfo)
        <tr>
            <td>{{ $accountinfo->id }}</td>
            <td>{{ $accountinfo->name }}</td>
            <td>{{ $accountinfo->email }}</td>
            <td>
            @if(strlen($accountinfo['password'])>10)                                     
       {{substr(strip_tags($accountinfo['password']),0,10)}}...
         @else
             {{$accountinfo['password']}}
            @endif
  
            </td>
            <td>{{ $accountinfo->usersrole }}</td>
                <form action="{{ action('AccountsController@destroy', $accountinfo->id) }}" method="post" class="form-control">

            <td>
            <a href="{{ action('AccountsController@show', $accountinfo->id) }}" class="btn btn-sm btn-success text-center text-white"><i class="far fa-eye"></i></a>
          
            @if(Auth::user()->usersrole == "superadmin")
            <a href="{{ action('AccountsController@edit', $accountinfo->id) }}" class="btn btn-sm btn-warning text-center text-white"><i class="far fa-edit"></i></a>
            
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger"  type="submit"><i class="far fa-trash-alt"></i></button>                
            @endif    
        </td>
            
            

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    </table>
    {{ $accounts->links() }}


    </div>
   </div>



   <div class="modal fade modal-create" id="add-data-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Create new account</h4>
        </div>
        <form action="{{ action('AccountsController@store') }}" method="post" >

        <div class="modal-body">

    @csrf
    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
    </div>
    <input type="text" class="form-control" name="name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" required autofocus>
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required autofocus>
    </div>      

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card-alt"></i></span>
    </div>
    <select class="form-control" name="usersrole"> 
                        <option value="admin">admin</option>
                        <option value="superadmin">superadmin</option>
                        
    </select>
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
    </div>
    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required autofocus>
    
    </div>

 
    

    </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="button"><a  class="text-white">Create</a></button>
        </div>

        </form> 

      </div>
    </div>
  </div>


@endsection
