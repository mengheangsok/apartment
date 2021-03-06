@extends('layouts.master')
@section('content')
<h3>Create Rooms</h3>
<form action="{{ url('/room/store') }}" method="post">
	@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name">
	</div>
	
	<div class="form-group">
		<label>Price</label>
		<input type="text" class="form-control" name="price">
	</div>

	<div class="form-group">
		<label>Category</label>
		<select name="category" class="form-control">
			<option value="">Choose One</option>
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
	</div>


	<div class="form-group">
		<label>Description</label>
		<textarea name="description" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>
@endsection