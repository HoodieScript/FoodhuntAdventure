@extends('layouts.default')


@section('contentmo')


<div class="w-75 bg-white container rounded p-3  mt-5">
   <div class="row d-flex justify-content-between">
   <div class="p-2 col-md-8">
     <h2>{{ __('Activity Log') }}</h2>
   </div>
 
   <div class="p-2 col-md-4">
   <form action="/search-for-activitylog-data" method="get">
                <div class="input-group">
                    <input type="search" name="search" placeholder="search user, date" class="form-control">
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
   </div>



@endsection
<!-- 
    -->