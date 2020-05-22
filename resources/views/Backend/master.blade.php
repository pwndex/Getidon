<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Getidon - Dashboard</title>

		<!-- Core CSS -->
		<link href="{{ mix('/css/backend.css') }}" rel="stylesheet">
	</head>

	<body>
		
		<div class="container cover-container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="/dashboard">
							<h3><i class="fas fa-check-circle"></i> Getidon <span class="small-text text-muted">Dashboard</span></h3>

						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="/tasks"><i class="fas fa-angle-left"></i> Go to Getidon</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row mb-auto">
				<div class="col card text-center bg-transparent border-0">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs justify-content-center">
							<li class="nav-item">
								<a class="nav-link {{ request()->is('dashboard/users') ? 'active' : '' }}" href="/dashboard/users">Users</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ request()->is('dashboard/tasks') ? 'active' : '' }}" href="/dashboard/tasks">Tasks</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						@yield('content')
					</div>
				</div>
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
		<script src="{{ mix('/js/backend.js') }}"></script>
	</body>
</html>