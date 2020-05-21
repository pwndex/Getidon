@extends('Frontend.master')

@section('content')

<div class="col">
	@include('Frontend.errors')
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
			<tr>
				<th>1</th>
				<td class="title-bold line-through">Create a repo on GitHub</td>
				<td>
					<input class="checkbox" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
			<tr>
				<th>2</th>
				<td class="title-bold">Learn PHP OOP</td>
				<td>
					<input class="" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
			<tr>
				<th>3</th>
				<td class="title-bold">Practice with CSS</td>
				<td>
					<input class="" type="checkbox" value="">
				</td>
				<td>
					<a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a>
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