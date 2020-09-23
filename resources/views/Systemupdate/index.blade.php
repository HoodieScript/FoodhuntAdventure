@extends('layouts.default')


@section('contentmo')

<div class="w-75 bg-white container rounded p-3  mt-5">
<!-- headings -->
<div class="d-flex justify-content-between">
  <div class="p-2">
    <h2>{{ __('System Update') }}</h2>
  </div>
</div>
<!--end headings -->

<!-- form -->
<form action="{{ action( 'SystemupdatesController@store') }}" class="form needs-validation" novalidate method="POST" enctype="multipart/form-data">

@csrf

<div class="form-row">
<!--- starts of row --->
<input type="hidden" name="id" value="1" class="form-control">

        <!-- first column-->
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="systemname" required class="form-control" placeholder="system name">

        <!--start validation -->
        <div class="valid-feedback">
        System name filled.
        </div>
        <div class="invalid-feedback">
        Required name*
        </div>
        <!--end validation -->
        </div></div>
        <!-- end first column -->

        <!-- second column -->
        <div class="col-md-6">
        <div class="custom-file">
        <label class="custom-file-label" for="validatedCustomFile">choose image...</label>
        <input type="file" name="uploadimage" class="custom-file-input" id="validatedCustomFile" required>

        <!--start validation -->
        <div class="valid-feedback">
        System name filled.
        </div>
        <div class="invalid-feedback">
        Required Image*
      </div>
        <!--end validation -->
  
        </div></div>
        <!-- end second column -->
        <!-- third column -->
   <div class="col-md-12">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit" class="btn btn-primary mt-3">Set up</button>
        <!-- end third column -->
  <div>
        <!-- end first column -->
</form>
        <!-- end form -->
        <!-- second column -->

<div class="form-row mt-5 border-top border-dark pt-3">
    <!-- first row and column-->
    <div class="col-md-12">
     <h2>{{ __('Preview') }}</h2>
    </div>

    <!-- second column-->
    @foreach($systemupdates as $systemdata)

    <div class="col-md-6  p-4">
    <div class="form-group">
          <label for="username">{{ __('System Name ') }}</label>
         
         
          <input type="text" class="form-control" value="{{ $systemdata->systemname  }}" readonly>
          </div>
       
       
    </div>
    <!-- end second column-->

     <!-- second column-->
     <div class="col-md-6 p-4">
     <div class="form-group">
     <label for="username">{{ __('System Image ') }}</label>

        @if($systemdata->uploadimage > 0)
        <img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img d-flex justify-content-center col-md-6" >

        @else
        Empty Image
        @endif
     @endforeach
    </div>
    </div>
    <!-- end second column-->
    
</div>
<div>

@overwrite

@section('nameandlogo')
@foreach($systemupdates as $systemdata)


<a class=" nav-link text-white"><img src="{{ asset('/uploads/dataimages/' .  $systemdata->uploadimage ) }}" class="img imagelogo">{{ $systemdata->systemname }} </a>


@endforeach
@endsection
