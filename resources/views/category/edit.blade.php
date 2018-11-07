<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<h3>Edit Category</h3>
<form action="{{ url('/category/'. $category->id) }}" method="post">
	@csrf
	{{ method_field('PATCH') }}
	<div class="form-group">
		<label>Name</label>
		<input type="text" value="{{ $category->name }}" class="form-control" name="name">
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary">Update</button>
	</div>
</form>



</body>
</html>