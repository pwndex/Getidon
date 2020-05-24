@extends('Frontend.master')

@section('content')

<div class="col">
	@include('errors')
	<form action="/account/password" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">Change password</h3>
		<div class="form-group">
			<label for="old_password"><i class="fas fa-lock"></i> Current password</label>
			<input type="password" name="old_password" class="form-control" id="old_password" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password"><i class="fas fa-lock"></i> New password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password_confirmation"><i class="fas fa-lock"></i> New password confirmation</label>
			<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" autocomplete="off">
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Update</button>
	</form>
</div>

@endsection