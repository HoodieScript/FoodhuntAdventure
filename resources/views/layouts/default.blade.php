<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Description" content="Food Hunt Adventure">
        <meta name="keywords" content="HTML,CSS,JAVACRIPT,LARAVEL">
        <meta name="author" content="Techknights">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/MainDesign.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('Fontawesome/css/all.css') }}">
        <!-- Animation On Scroll 
       <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
        <script type="text/javascript" src="{{ asset('js/aos.js')}}"></script>
        -->
        <!-- Bootstrap -->
      
       
        <title>{{ config('default .name', 'FoodHuntAdventure') }}</title>

    </head>
      <body class="m-0" >
      <div id="wrapper">
      <aside id="sidebar-wrapper">
      <div class="sidebar-brand  pb-2 pt-3">
      <p class="text-white text-center">{{ __('Menu')}}</p>
      </div>
      <ul class="mr-auto sidebar-nav" id="navAccordion">
      
      <li class="nav-item active">
          <a class="nav-link" href=" {{ route('reports.index') }} "><i class="fal fa-chart-line pl-2 pt-3 pr-4"></i>Reports</a>
      </li>      
      
      <li class="nav-item">
          <a class="nav-link" href=" {{ route('players.index') }}"><i class="fal fa-users pl-2 pt-3 pr-4"></i>Players</a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href=" {{ route('accounts.index') }} "><i class="fal fa-user-lock pl-2 pt-3 pr-4"></i>User Access Control</a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fal fa-cogs pl-2 pt-3 pr-4"></i>Settings</a>
      </li>

      <div class="collapse" id="collapseExample">
        @if(Auth::user()->usersrole == "superadmin")
          <a class="dropdown-item" href="{{ route('systemupdates.index') }} "><i class="fal fa-wrench  pt-3 pr-4"></i>System Update</a>
        @endif   
          <a class="dropdown-item" href="{{ route('systeminfos.index') }}"><i class="fal fa-question-circle  pt-3 pr-4"></i>System Info</a>
       
          <a class="dropdown-item" href=" {{ route('activitylogs.index') }}"><i class="fal fa-tasks  pt-3 pr-4"></i>Activity Logs</a>
      </div>
  
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fal fa-trophy-alt pl-2 pt-3 pr-4"></i>Leaderboards</a>
      </li>

      <div class="collapse" id="collapseExample2">                   
          <a class="dropdown-item" href=" {{ route('foodhunt.index') }} "><i class="far fa-star pt-3 pr-4"></i>Food Hunt</a>
          <a class="dropdown-item" href=" {{ route('fooddrop.index') }} "><i class="fal fa-cloud-meatball pt-3 pr-4"></i>Fooddrop</a>
          <a class="dropdown-item" href=" {{ route('spellafood.index') }} "><i class="fal fa-spell-check pt-3 pr-4"></i>Spellafood</a>
      </div>

    
      
      <li class="nav-item border-top">                    
      <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><i class="fal fa-user pl-2 pt-3 pr-4"></i>
          {{ Auth::user()->name }} 
          </a>
    </li>
    <div class="collapse" id="collapseExample3">

          <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fal fa-sign-out-alt pt-3 pr-4"></i>{{ __('Sign out') }}</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
         
      </div>
      </ul>
      </aside>

      <div id="nav-itembar-wrapper">
      <nav class=" row d-flex justify-content-left  pt-0 container-fluid" id="nav-bar" >
          
      
      <div class="nav-item col-xs-2">
          <p href="#" class="sidebaricon text-dark  pt-4 pl-3" id="sidebar-toggle"><i class="fa fa-bars"></i></p>
      </div>
      <div class="nav-item col-xs-10">
           @yield('nameandlogo')
      </div>
      
      
       
      
      </nav>
      </div>
    <div class="content-wrapper" id="content-wrapper">
    @yield('contentmo')
    </div>
    </div>

    </body>
</html>


<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script type="text/javascript" src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/Systemjs.js') }}"></script>
