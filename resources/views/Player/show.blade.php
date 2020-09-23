
@extends('layouts.default')

@section('contentmo')

  
	<div class="w-75 bg-white container rounded p-3  mt-5">
   
  
  <form class="form">

  <div class="d-flex justify-content-between">
  <div class="p-2">
    <h2>{{ __('Player Profile') }}</h2>
  </div>

  <div class="p-2">
    <a href="{{ action('PlayersController@index') }}" class="btn btn-sm btn-primary">Back</a>
  </div>
  </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="username">{{ __('Username') }}</label>
          <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>

          <input type="text" class="form-control" value="{{ $personalinfo->username }}" readonly placeholder="Username" >
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
        value="@if(strlen($personalinfo['hash'])>10){{substr(strip_tags($personalinfo['hash']),0,10)}}...
        @else
       {{$personalinfo['hash']}}
        @endif" readonly placeholder="Password">
          </div>

          
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label for="Age">{{ __('Age') }}</label>

        <div class="input-group-prepend">
    <span class="input-group-text" ><i class="fas fa-sort-numeric-up-alt"></i></span>
    <input type="text" class="form-control" value="{{ $personalinfo->age }}" readonly  placeholder="Age" >

    </div>

        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
        <label for="password">{{ __('Gender') }}</label>
        </div>
          <div class="form-check-inline">
          <label class="form-check-label pr-2">
          <input name="usersrole" class="form-check-input" value="Male"  type="radio" {{ $personalinfo->gender == "Male" ? 'checked' : ''}}> {{ __('Male') }}
          </label>
          <label class="form-check-label pr-2">
          <input name="usersrole" class="form-check-input" value="Male"  type="radio" {{ $personalinfo->gender == "Female" ? 'checked' : ''}}> {{ __('Female') }}
          </label>
          </div>


        </div>
      
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="SecretQuestion">{{ __('Secret Question') }}</label>
          <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-question"></i></span>
          <input type="text" class="form-control" value="{{ $personalinfo->squestion }}" readonly placeholder="Secret Question">
          </div>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="SecretAnswer">{{ __('Secret Answer') }}</label>
          <div class="input-group-prepend"> 
          <span class="input-group-text"><i class="fas fa-pencil"></i></span>
          <input type="text" class="form-control" value="{{ $personalinfo->sanswer }}" readonly placeholder="Secret Answer">
        </div>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!-- end  row   -->
    <!-- row -->
    <div class="row">
      <!-- col-md-6 -->
      <div class="col-md-6">

        <div class="form-group">
          <label for="SecretQuestion">{{ __('Location') }}</label>
          <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-question"></i></span>
          <input type="text" class="form-control" value="{{ $personalinfo->location }}" readonly placeholder="Location">
          </div>
        </div>
      </div>
    <!-- end col --->
    <!--- end row -- >


   

  </form>
  <div class="col-lg-12 table-responsive">
  <table class="table  table-hover text-center">
  <tr>
  <p class="font-weight-bold">{{ __('Story Mode Score') }}</p>
  </tr>
  <thead>
  <tr>
  <th>Kitchen</th>                  <!--Scores ng players sa bawat level-->
  <th>Backyard</th>
  <th>Grocery</th>
  <th>Market</th>
  <th>Date Played</th>
  </tr>
  </thead>
  @foreach($players as $playersdata)
  <tr>
  <td>{{ $playersdata->kit }}</td>
  <td>{{ $playersdata->back }}</td>
  <td>{{ $playersdata->gro }}</td>
  <td>{{ $playersdata->mar }}</td>
  <td>{{ $playersdata->date}}</td>
  </tr>
  @endforeach
  </table>
  </div>

  <div class="col-lg-12 table-responsive">
  <table class="table  table-hover text-center">
  
  <tr>
  <p class="font-weight-bold">{{ __('Arcade Mode Spellafood Score') }}</p>
  </tr>
  <thead>
  <tr>                <!--Scores ng players sa arcade-->
  <th>Score</th>
  <th>Date Played</th>
  </tr>
  </thead>
  @foreach($players as $playersdata)
  <tr>
  <td>{{ $playersdata->score }}</td>
  <td>{{ strtotime($playersdata->date) }}</td>
  </tr>
  @endforeach
  </table>
  </div>
  
  <div class="col-lg-12 table-responsive">
  <table class="table  table-hover text-center">
  
  <tr>
  <p class="font-weight-bold">{{ __('Arcade Mode Fooddrop Score') }}</p>
  </tr>
  <thead>
  <tr>
                  <!--Scores ng players sa arcade-->
  <th>Score</th>
  <th>Date Played</th>
  
  </tr>
  </thead>
  @foreach($players as $playersdata)
  <tr>
  <td>{{ $playersdata->fdscore }}</td>
  <td>{{ $playersdata->datefd }}</td>
  </tr>
  @endforeach
  </table>
  </div>
  
</div>
@endsection


@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-dark font-weight-bold"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach

@endsection