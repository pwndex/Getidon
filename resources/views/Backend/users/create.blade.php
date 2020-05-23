@extends('Backend.master')

@section('content')

<div class="col">
	<form action="/dashboard/users/create" method="POST">
		{{ csrf_field() }}
		@include('errors')
		<h3 class="text-center main-text">User create</h3>
		<div class="form-group">
			<label for="email"><i class="fas fa-user"></i> Email</label>
			<input type="email" name="email" class="form-control" id="email" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name"><i class="fas fa-user"></i> Name</label>
			<input type="text" name="name" class="form-control" id="name" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="password"><i class="fas fa-user"></i> Password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="select">Role</label>
			<select class="form-control" name="is_admin" id="select">
				<option value="0">User</option>
				<option value="1">Admin</option>
			</select>
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Create</button>
	</form>
</div>

@endsection