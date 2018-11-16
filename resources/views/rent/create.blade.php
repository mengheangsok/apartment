<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<h3>Create Rent</h3>
@if($errors->any())
	<div class="alert alert-danger">
		The given data is invalid.
	</div>
@endif

<form action="{{ url('/rent') }}" method="post">
	@csrf
	<div class="form-group">
		<label>Room</label>
        <select name="room" class="form-control {{ $errors->first('room') ? 'is-invalid' : ''  }}">
			<option value="">Choose One</option>
			@foreach($rooms as $room)
				<option value="{{ $room->id }}">{{ $room->name }}</option>
			@endforeach
		</select>
		@if($errors->has('room'))
			<div class="invalid-feedback">
				{{ $errors->first('room') }}
			</div>
		@endif
	</div>

	<div class="form-group">
		<label>Customer</label>
        <select name="customer" class="form-control">
			<option value="">Choose One</option>
			@foreach($customers as $customer)
				<option value="{{ $customer->id }}">{{ $customer->name }}</option>
			@endforeach
		</select>
		@if($errors->has('customer'))
			<div class="invalid-feedback">
				{{ $errors->first('customer') }}
			</div>
		@endif
	</div>

    <div class="form-group">
		<label>Price</label>
		<input type="text" value="{{ old('price') }}" class="form-control {{ $errors->first('price') ? 'is-invalid' : ''  }} " name="price">
		@if($errors->has('price'))
			<div class="invalid-feedback">
				{{ $errors->first('price') }}
			</div>
		@endif
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