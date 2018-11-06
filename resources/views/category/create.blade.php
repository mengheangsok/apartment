<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<h3>Create Category</h3>
@if($errors->any())
	<div class="alert alert-danger">
		The given data is invalid.
	</div>
@endif

<form action="{{ url('/category') }}" method="post">
	@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : ''  }} " name="name">
		@if($errors->has('name'))
			<div class="invalid-feedback">
				{{ $errors->first('name') }}
			</div>
		@endif
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>



</body>
</html>