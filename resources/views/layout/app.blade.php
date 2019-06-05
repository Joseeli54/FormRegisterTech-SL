<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form - @yield('title')</title>
	<link rel="icon" href="{{asset('img/icon.jpg')}}" type="image/jpg">
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css')}}" integrity="ssha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>

	<link rel="stylesheet" href="{{asset('css/forms-style.css')}}">
	<script src="{{ asset('js/button-init.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-dark" id = "initPart">
		<a href="/" class="navbar-brand" class="zero-padding">
		<div id="title"><b> CLIENT REGISTRATION <b></div>
		</a>
    </nav>
    <div class="container">
		@yield('content')
	</div>
	<footer>
		<div id = "finalPart">
				<div class="col-md-12 text-center">
					<p id="texto-footer">Year of the registration: 
						<script type="text/javascript">
							var fecha = new Date();
							var anio = fecha.getFullYear();
							var texto = document.getElementById('texto-footer');
							texto.innerText += ' ' + anio;
						</script>
					</p>
				</div>
		</div>
	</footer>
</body>
</html>