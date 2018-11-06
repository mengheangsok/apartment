<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
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
		<label>Description</label>
		<textarea name="description" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>



</body>
</html>