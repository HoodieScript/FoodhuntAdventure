@extends('layouts.default')


@section('contentmo')


<div class="w-75 bg-white container rounded p-3  mt-5">
   <div class="row d-flex justify-content-between">
   <div class="p-2 col-md-8">
     <h2>{{ __('Player List') }}</h2>
   </div>
 
   <div class="p-2 col-md-4">
   <form action="/search-for-players-data" method="get">
            @csrf
                <div class="input-group">
                    <input type="search" name="search" placeholder="search username, gender, age" maxlength="30" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-sm btn-info rounded"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </form>
   </div>

   <div class="table-responsive">
   <table class="table table-hover bg-white rounded text-center">
    <thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Location</th>
        <th colspan="2">action</th>

    </tr>
    </thead>
    <tbody>
         @foreach($players as $playerinfo)
        <tr>
            <td>{{ $playerinfo->id }}</td>
            <td>{{ $playerinfo->username}}</td>

            
            <td>
            @if(strlen($playerinfo['hash'])>10)                                     
       {{substr(strip_tags($playerinfo['hash']),0,10)}}...
  @else
      {{$playerinfo['hash']}}
  @endif
            </td>
            <td>{{ $playerinfo->gender }}</td>
            <td>{{ $playerinfo->age }} </td>
            <td>{{ $playerinfo->location }}</td>
            

            <td>
            <a href="{{ action('PlayersController@show', $playerinfo->id) }}" class="btn btn-sm btn-success text-center text-white"><i class="far fa-eye"></i></a>
            </td>
          
           
            
            

          
            
        </tr>
        @endforeach 
    </tbody>
    </table>
    
    {{ $players->links() }}

    </div>
   </div>


@endsection

@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-dark font-weight-bold"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach

@endsection