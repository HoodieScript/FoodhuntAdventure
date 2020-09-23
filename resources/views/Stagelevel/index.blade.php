@extends('layouts.default')


@section('nameandapp')

@if(count($systemupdates) >0)
@foreach($systemupdates as $systemupdate)
    
    <img src="/storage/images_uploads/{{ $systemupdate->cover_image }}" class="dost-image">
    
    <a class="navbar-brand text-white">{{ $systemupdate->systemname }}</a>
   

@endforeach
 
@endif

@overwrite


@section('contentmo')


<div class="container">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif
    <div class="row">
        <div class="col-md-6 p-2">
            <h3 class="text-white">Player List</h3>
         </div>
         <div class="col-md-4 p-2">
            <form action="/search-for-foodhunt-data" method="get">
                <div class="input-group">
                    <input type="search" name="search" placeholder="looking for something?" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-sm btn-info rounded">Search</button>
                    </span>
                </div>
            </form>
         </div>     
      
    </div>
    <div class="row table-responsive">
    <table class="table table-hover bg-white rounded text-center">
    <thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Kitchen</th>
        <th>Backyard</th>
        <th>Grocery</th>
        <th>Market</th>

    </tr>
    </thead>
    <tbody>
         @foreach($foodhunt as $stage)
        <tr>
            <td>{{ $stage->id }}</td>
            <td>{{ $stage->username}}</td>
            <td>{{ $stage->kit }}</td>
            <td>{{ $stage->back }}</td>
            <td>{{ $stage->gro }} </td>
            <td>{{ $stage->mar }} </td>
            

        
           
            
            

          
            
        </tr>
        @endforeach
    </tbody>
    </table>
    
    {{ $foodhunt->links() }}
    </div>

@endsection