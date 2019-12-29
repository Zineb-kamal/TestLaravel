<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
	<title></title>
  <link rel="stylesheet"  href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  
  <style  > .body{margin-top:30px; }</style>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 <!-- Styles -->
 <style>
  .content {
      text-align: center;
  }
  .title {
                font-size: 84px;
            }

           

            .m-b-md {
              position: relative;
               top : 100px;
            } 
  
</style>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{url('/')}}">@lang('home.home_menu')</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
      <a class="nav-link" href="{{url('/Catégories')}}">@lang('home.categories_menu')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{url('/Courses')}}" tabindex="-1" aria-disabled="true">@lang('home.courses_menu')</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">@lang('home.login_menu')</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">@lang('home.register_menu')</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="locale/en" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       English
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="locale/fr">French</a>
      </div>
      
    </li>
  </ul>
  
    </div>
</nav>


<div class="body">
@yield('content')

</div>

</body>
</html>