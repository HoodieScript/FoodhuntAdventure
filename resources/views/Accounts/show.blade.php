
@extends('layouts.default')
@section('contentmo')


<div class="w-75 bg-white container rounded p-3  mt-5">
   
  
   <form class="form">
 
   <div class="d-flex justify-content-between">
   <div class="p-2">
     <h2>{{ __('Account Profile') }}</h2>
   </div>
 
   <div class="p-2">
     <a href="{{ action('AccountsController@index') }}" class="btn btn-sm btn-primary">Back</a>
   </div>
   </div>
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="name">{{ __('Name') }}</label>
           <div class="input-group-prepend">
           <span class="input-group-text"><i class="fas fa-user"></i></span>
 
           <input type="text" class="form-control" value="{{ $accounts->name }}" readonly placeholder="Username" >
           </div>
         </div>
       </div>
       <!--  col-md-6   -->
    
       
       <div class="col-md-6">
 
         <div class="form-group">
         <label for="userrole">{{ __('User role') }}</label>
         </div>
           <div class="form-check-inline">
           <label class="form-check-label pr-2">
           <input name="usersrole" class="form-check-input"  value="superadmin"  type="radio" {{ $accounts->usersrole == "superadmin" ? 'checked' : ''}}> {{ __('Superadmin') }}
           </label>
           <label class="form-check-label pr-2">
           <input name="usersrole" class="form-check-input" disable value="admin"  type="radio" {{ $accounts->usersrole == "admin" ? 'checked' : ''}}> {{ __('Admin') }}
           </label>
           </div>
 
 
         </div>
      
       <!--  col-md-6   -->
     </div>
 
 
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
         <label for="Email">{{ __('Email Address') }}</label>
 
         <div class="input-group-prepend">
     <span class="input-group-text" ><i class="fas fa-sort-numeric-up-alt"></i></span>
     <input type="text" class="form-control" value="{{ $accounts->email }}" readonly  placeholder="Email" >
 
     </div>
 
         </div>
 
 
       </div>
       <!--  col-md-6   -->
          
       <div class="col-md-6">
         <div class="form-group">
           <label for="password">{{ __('Password') }}</label>
           <div class="input-group-prepend">
           <span class="input-group-text" ><i class="fas fa-key"></i></span>
           <input type="text" class="form-control text-left"  
         value="@if(strlen($accounts['password'])>10){{substr(strip_tags($accounts['password']),0,10)}}...
         @else
        {{$accounts['password']}}
         @endif" readonly placeholder="Password">
           </div>
 
           
         </div>
       </div>
 
       
       <!--  col-md-6   -->
     </div>
  
     </div>
     <!--  row   -->

</form>
</div>

@endsection

@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-dark font-weight-bold"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach
@endsection
