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
            <h3 class="text-white">Activty Logs</h3>
         </div>
         <div class="col-md-4 p-2">
            <form action="/search-for-activitylog-data" method="get">
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
        <th>ID</th>
        <th>Description</th>
        <th>Data ID</td>
        
        <th>Action taken by (User ID)</th>
        <th>Date Processed</th>
    </tr>
    </thead>
    <tbody>
         @foreach($activitylogs as $activitylog)
        <tr>
            <td>{{ $activitylog->id }}</td>
            <td>{{ $activitylog->description }} the data in {{ str_replace('App\\', ' ', $activitylog->subject_type) }}</td>
            <td>{{ $activitylog->subject_id }}</td>
            
            <td>{{ $activitylog->causer_id }}</td>
            <td>{{ $activitylog->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
    {{ $activitylogs->links() }}
    </div>




@endsection