
@extends('layouts.default')

@section('contentmo')

@if($message = Session::get('danger'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>




@endif

	<div class="w-50 container">
    <form action="{{ action('AccountsController@update', $accounts->id) }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
    </div>
    <input type="text" class="form-control" name="name"  value="{{ $accounts->name }}" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email" class="form-control" name="email"  value="{{ $accounts->email }}" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required="">
    </div>      

    <div class="input-group mb-3 bg-white rounded">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card-alt"></i></span>
    </div>

    <div class="form-check-inline p-2">
    <label class="form-check-label">
    <input name="usersrole" class="form-check-input" value="superadmin"  type="radio" {{$accounts->usersrole == "superadmin" ? 'checked' : ''}}> superadmin
    </label>
    </div>
    
    <div class="form-check-inline p-2">
    <label class="form-check-label">
    <input name="usersrole" class="form-check-input" value="admin"  type="radio" {{$accounts->usersrole == "admin" ? 'checked' : ''}}> admin
    </label>
    </div>
    

    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
    </div>
    <input type="password" class="form-control" name="password"  value="{{ $accounts->password }}" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
    </div>

    <button type="submit" class="btn btn-warning btn-sm">Update</button>
    <a href="{{ action('AccountsController@index') }}" class="btn btn-sm btn-primary">Back</a>
</form> 
</div>
	

@endsection

@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-dark font-weight-bold"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach
@endsection
