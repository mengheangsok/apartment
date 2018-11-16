<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">

<h3>Edit Rooms</h3>
<form action="{{ url('/room/update/'. $room->id) }}" method="post">
	@csrf
	{{ method_field('PATCH') }}
	<div class="form-group">
		<label>Name</label>
		<input type="text" value="{{ $room->name }}" class="form-control" name="name">
	</div>
	
	<div class="form-group">
		<label>Price</label>
		<input type="text" value="{{ $room->price }}" class="form-control" name="price">
	</div>

	<div class="form-group">
		<label>Category</label>
		<select name="category" class="form-control">
			<option value="">Choose One</option>
			@foreach($categories as $category)
				<option {{ $category->id == $room->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label>Description</label>
		<textarea name="description" class="form-control">{{ $room->description }}</textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Update</button>
	</div>
</form>



</body>
</html>