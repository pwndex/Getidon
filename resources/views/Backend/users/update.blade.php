@extends('Backend.master')

@section('content')
@include('errors')
<div class="col">
	<form action="/dashboard/users/{{ $user->id }}/update" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">User update</h3>
		<div class="form-group">
			<label for="email"><i class="fas fa-envelope"></i> Email</label>
			<input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
		</div>
		<div class="form-group">
			<label for="name"><i class="fas fa-user"></i> Name</label>
			<input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
		</div>
		<div class="form-group">
			<label for="password"><i class="fas fa-lock"></i> Password</label>
			<input type="password" name="password" class="form-control" id="password" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="select"><i class="fas fa-user"></i> Role</label>
			<select class="form-control" name="is_admin" id="select">
				<option value="0" {{ ($user->is_admin == 0) ? 'selected' : '' }}>User</option>
				<option value="1" {{ ($user->is_admin == 1) ? 'selected' : '' }}>Admin</option>
			</select>
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Update</button>
	</form>
</div>

@endsection