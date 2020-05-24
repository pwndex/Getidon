@extends('Backend.master')

@section('content')
@include('errors')
<div class="col">
	<form action="/dashboard/tasks/create" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">Task create</h3>
		<div class="form-group">
			<label for="title"><i class="fas fa-envelope"></i> Title</label>
			<input type="text" name="title" class="form-control" id="title" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="user_id"><i class="fas fa-user"></i> User</label>
			<select class="form-control" name="user_id" id="select">
				@foreach($users as $user)
					<option value="{{ $user->id }}">{{ $user->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="is_done"><i class="fas fa-list"></i> Done</label>
			<select class="form-control" name="is_done" id="select">
				<option value="1">Yes</option>
				<option value="0" selected>No</option>
			</select>
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Create</button>
	</form>
</div>

@endsection