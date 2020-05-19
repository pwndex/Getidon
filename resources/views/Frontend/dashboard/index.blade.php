@extends('Frontend.dashboard.master')

@section('content')

<div class="col">
	<h1 class="main-text text-center">List of tasks</h1>
	<table class="table table-borderless table-hover">
		<thead>
			<tr>
				<th></th>
				<th>Title</th>
				<th>Done</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>1</th>
				<td class="title-bold line-through">String have to be 45 symbols long</td>
				<td>
					<input class="checkbox" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn custom-btn"><i class="fas fa-trash"></i></a>
				</td>
			</tr>
			<tr>
				<th>2</th>
				<td class="title-bold">Task two</td>
				<td>
					<input class="" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn custom-btn"><i class="fas fa-trash"></i></a>
				</td>
			</tr>
			<tr>
				<th>3</th>
				<td class="title-bold">Task three</td>
				<td>
					<input class="" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn custom-btn"><i class="fas fa-trash"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
	<nav aria-label="...">
		<ul class="pagination pagination-sm">
			<li class="page-item disabled">
		    	<a class="page-link" href="#" tabindex="-1">1</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
		</ul>
	</nav>
</div>

@endsection