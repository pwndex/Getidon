@extends('Frontend.master')

@section('content')

<main role="main" class="container inner cover">
	<form>
		<h1 class="text-center cover-heading">Join in</h1>
		<div class="form-group">
			<label for="email"><i class="fas fa-envelope"></i> Email address</label>
			<input type="email" name="email" class="form-control" id="email" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password"><i class="fas fa-lock"></i> Password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password_confirmation"><i class="fas fa-lock"></i> Password Confirmation</label>
			<input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation">
		</div>
		<button type="submit" class="btn btn-lg btn-secondary">Register</button>
	</form>
</main>

<footer class="text-center mastfoot mt-auto">
	<div class="inner">
		<p></p>
	</div>
</footer>

@endsection