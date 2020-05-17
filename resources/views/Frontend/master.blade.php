<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title></title>

		<!-- Core CSS -->
		<link href="{{ mix('/css/frontend.css') }}" rel="stylesheet">
	</head>

	<body>

		<div class="container-md cover-container d-flex h-100 p-3 mx-auto flex-column">
			<header class="text-center masthead mb-auto">
				<div class="inner">
					<a href="/" class="masthead-brand"><h3>Getidon</h3></a>
					<nav class="nav nav-masthead justify-content-center">
						<a class="nav-link {{ request()->is('/login') ? 'active' : '' }}" href="/login">Login</a>
						<a class="nav-link {{ request()->is('/register') ? 'active' : '' }}" href="/register">Register</a>
					</nav>
				</div>
			</header>
			
			@yield('content')

			<footer class="text-center mastfoot mt-auto">
				<div class="inner">
					<p>Made with ❤ by <a href="https://instagram.com/pwndex" target="_blank">pwndex</a></p>
				</div>
			</footer>
		</div>

		<!-- Core JS -->
		<script src="{{ mix('/js/frontend.js') }}"></script>
	</body>
</html>