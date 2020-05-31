@extends('Backend.master')

@section('content')
@include('errors')
<table class="table table-sm table-responsive-sm table-borderless table-hover">
	<thead>
		<a href="/dashboard/tasks/create" class="btn btn-sm custom-btn float-left">Create task</a>
		<div class="float-right">
			<input type="text" class="form-control-sm" id="search-input" placeholder="Search" aria-label="" aria-describedby="search-btn">
		</div>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Title</th>
			<th scope="col">User</th>
			<th scope="col">Done</th>
			<th scope="col">Update</th>
			<th scope="col">Delete</th>
		</tr>
	</thead>
	<tbody id="search-table">
		@foreach($tasks as $task)
		<tr>
			<th scope="row">{{ $task->id }}</th>
			<td>{{ $task->title }}</td>
			<td>{{ $task->user->name }}</td>
			@if($task->is_done == 1)
				<td>Yes</td>
			@else
				<td>No</td>
			@endif
			<td><a href="/dashboard/tasks/{{ $task->id }}/update" class="btn btn-sm custom-btn"><i class="fas fa-edit"></i></a></td>
			<td>
				<form action="/dashboard/tasks/{{ $task->id }}/delete" method="POST">
					{{ csrf_field() }}
					<button type="submit" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<nav aria-label="...">
	<ul class="pagination pagination-sm">
		{{ $tasks->links() }}
	</ul>
</nav>

@endsection
@section('scripts')
<script>
	$(document).ready(function(){
	  $("#search-input").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#search-table tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
</script>
@endsection