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
		
		<div class="container cover-container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="/"><h3><i class="fas fa-check-circle"></i> Getidon</h3></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="/register"><i class="fas fa-user-plus"></i> Register</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				@yield('content')
			</div>
			<div class="row">
				<div class="col footer text-center">
					<div class="container">
						<span class="text-muted">
							Made with <i class="fas fa-heart"></i> by <a href="https://instagram.com/pwndex" target="_blank">pwndex</a>
						</span>
					</div>
				</div>
			</div>
		</div>


		<!-- Core JS -->
		<script src="{{ mix('/js/frontend.js') }}"></script>
	</body>
</html>