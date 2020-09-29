@extends('layouts.default')


@section('contentmo')


<div class="w-75 bg-white container rounded p-3  mt-5">
   <div class="row d-flex justify-content-between">
   <div class="p-2 col-md-8">
     <h2>{{ __('Spellafood') }}</h2>
   </div>
 
   <div class="p-2 col-md-4">
   <form action="/search-for-spellafood-data" method="get">
                <div class="input-group">
                    <input type="search" name="search" placeholder="search username" class="form-control">
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-sm btn-info rounded"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </form>
   </div>

   <div class="table-responsive ">
    
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
         @foreach($spellafoods as $spellafood)
        <tr>
            <td>{{ $spellafood->id }}</td>
            <td>{{ $spellafood->username}}</td>
            <td>{{ $spellafood->score }}</td>

        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $spellafoods->links() }}
    </div>
   </div>



@endsection
