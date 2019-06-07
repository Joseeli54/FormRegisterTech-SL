<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Form - @yield('title')</title>
	<link rel="icon" href="{{asset('img/icon.jpg')}}" type="image/jpg">
	
	<!-- Styles -->
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css')}}" integrity="ssha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/forms-style.css')}}">

	<!-- Javascripts -->
	<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{ asset('js/button-init.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
	<nav class="navbar navbar-dark" id = "initPart">
		<a href="/" class="navbar-brand" class="zero-padding">
		<div id="title"><b> CLIENT REGISTRATION <b></div>
		</a>

         @guest
           <li class="nav-item" style="display:block; color:white">
               <a class="navbar-brand" href="{{ route('login') }}">
               <b> {{ __('Login') }} </b></a>
           </li>
         @else
            <li class="nav-item dropdown" style="display:block; color:white">
            <a id="navbarDropdown" class="nav-link navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </div>
            </li>
          @endguest

    </nav>
    <div class="container py-4">
		@yield('content')
	</div>
</body>
</html>