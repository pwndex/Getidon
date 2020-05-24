@extends('Frontend.master')

@section('content')

<div class="col">
	@include('errors')
	<form action="/account/settings" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">Settings</h3>
		<div class="form-group">
			<label for="name"><i class="fas fa-user"></i> Name</label>
			<input type="text" name="name" class="form-control" id="name" autocomplete="off" value="{{ auth()->user()->name }}">
		</div>
		<div class="form-group">
			<label for="email"><i class="fas fa-user"></i> Email</label>
			<input type="email" name="email" class="form-control" id="email" autocomplete="off" value="{{ auth()->user()->email }}">
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Update</button>
	</form>
</div>

@endsection