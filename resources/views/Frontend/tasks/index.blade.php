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
				<td class="title-bold line-through">{{ $task->title }}</td>
				<td>
					<input class="checkbox" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a>
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