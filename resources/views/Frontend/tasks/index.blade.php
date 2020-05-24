@extends('Frontend.master')

@section('content')

<div class="col">
	@include('errors')
	<h3 class="main-text text-center">List of tasks</h3>
	<table class="table table-borderless table-hover table-sm table-responsive-sm ">
		<thead>
			<tr>
				<th></th>
				<th>Title</th>
				<th>Done</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
			<tr>
				<th>{{ $task->id }}</th>
				<td id="line-{{ $task->id }}" class="title-bold {{ ($task->is_done == 1) ? 'line-through' : ''}}">{{ $task->title }}</td>
				<td>
					<input class="checkbox taskstate" name="taskstate" type="checkbox" value="{{ $task->id }}" {{ ($task->is_done == 1) ? 'checked' : ''}}>
				</td>
				<td>
					<a href="/tasks/{{ $task->id }}/delete" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a>
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
</div>

@endsection

@section('scripts')
<script>
	$(".taskstate").on("change", function(e) {
		e.preventDefault();
		$("#line-"+e.target.value).toggleClass("line-through");
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		$.ajax({
		    url: '/tasks/' + e.target.value + '/taskstate',
		    type: 'POST',
		    taskstate: e.target.value
		});
	});
</script>
@endsection