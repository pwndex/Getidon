@extends('Frontend.home.master')

@section('content')

<div class="col">
	<form>
		<h3 class="text-center main-text">Join in</h3>
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
		<button type="submit" class="btn btn-lg custom-btn">Register</button>
	</form>
</div>

@endsection