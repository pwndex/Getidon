@extends('Frontend.home.master')

@section('content')

<div class="col">
	<form action="/login" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">Let's get it done</h3>
		<div class="form-group">
			<label for="email"><i class="fas fa-envelope"></i> Email address</label>
			<input type="email" name="email" class="form-control" id="email" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password"><i class="fas fa-lock"></i> Password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group form-check">
		  <input class="form-check-input" type="checkbox" value="1" name="remember_me" id="remember_me">
		  <label class="form-check-label" for="remember_me">Remember me</label>
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Login</button>
	</form>
</div>

@endsection