<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="Description" content="Food Hunt Adventure">
       <meta name="keywords" content="HTML,CSS,JAVACRIPT,LARAVEL">
        <meta name="author" content="Techknights">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name', 'FoodHuntAdventure') }}</title>
         <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('Fontawesome/css/all.css') }}">
        <!-- Animation On Scroll -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
        <script type="text/javascript" src="{{ asset('js/aos.js')}}"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <script type="text/javascript" src="{{ asset('bootstrap/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/popper.js') }}"></script>
       
    </head>
    <body>
    <nav class="navbar navbar-expand-lg ">
    <img  src="{{ asset('images/dostfnri.png') }}" class="img dost-image nav-item  img-fluid" alt="Responsive image">
    <a class="navbar-brand text-white" href="#">DOST-FNRI</a>

    </nav>
<div class="card container col-lg-5 bg-white rounded fha-div p-4">
        <div class="card-headder mx-auto d-block">
            <img src="{{ asset('images/ienjoy.png')}}" class="img img-fluid game-logo">

        </div>

        <div class="d-flex bd-highlight d-flex flex-wrap flex-row panel  card-body p-5">
        <div class="flex-fill">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
        </div>
                            
        <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        </div>       


        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
        </div>             
                                          
        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>   
        </span>
        @endif
        </div>
       
                                          
        <div class="container mx-auto d-block">
        <button type="submit" class="btn btn-primary m-auto">
        {{ __('Sign in') }}
        </button>
</div>
                    </form>
                    </div>


                    
             </div>
             </div>
    
</body>
</html>

