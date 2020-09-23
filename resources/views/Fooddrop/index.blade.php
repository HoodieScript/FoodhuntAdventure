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
            <h3 class="text-white">Food drop Scores List </h3>
         </div>
         <div class="col-md-4 p-2">
            <form action="/search-for-fooddrop-data" method="get">
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
        <th>Score</th>
        <th>Date Played</th>

    </tr>
    </thead>
    <tbody>
         @foreach($fooddrops as $fooddrop)
        <tr>
            <td>{{ $fooddrop->id }}</td>
            <td>{{ $fooddrop->usern}}</td>
            <td>{{ $fooddrop->fdscore }}</td>
            <td>{{ $fooddrop->datefd }} </td>
            

        
           
            
            

          
            
        </tr>
        @endforeach
    </tbody>
    </table>
    
    {{ $fooddrops->links() }}
    </div>

@endsection