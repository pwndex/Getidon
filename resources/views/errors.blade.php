@if (session('success'))
	<div class="alert text-center text-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ session('success') }}
	</div>
@endif

@if (session('error'))
	<div class="alert text-center text-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ session('error') }}
	</div>
@endif
  
@if ($errors->any())
	<div class="alert text-center" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<ul>
			@foreach($errors->all() as $error)
				<li class="text-danger">{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif