@extends('Frontend.master')

@section('content')

<main role="main" class="container inner cover">
	<form>
		<h1 class="text-center cover-heading">Let's get it done</h1>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" name="email" class="form-control" id="email" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="remember_me">
			<label class="form-check-label" for="remember_me">Remember Me</label>
		</div>
		<button type="submit" class="btn btn-lg btn-secondary">Login</button>
	</form>
</main>

<footer class="text-center mastfoot mt-auto">
	<div class="inner">
		<p></p>
	</div>
</footer>

@endsection