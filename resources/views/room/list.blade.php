<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<br>
		<h3 class="float-left">Rooms</h3>
		<a href="{{ url('/room/create') }}" class="btn btn-primary float-right">Create</a>
		<div class="clearfix"></div>
		<table class="table mt-3">
			<thead>
				<tr>
					<th>#</th>
					<th>Category</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Option</th>
				</tr>
			</thead>
			@php $n = 1 @endphp
			<tbody>
				@foreach($rooms as $room)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $room->category ? $room->category->name : '--' }}</td>
						<td>{{ $room->name }}</td>
						<td>{{ $room->price }}</td>
						<td>{{ $room->description }}</td>
						<td>
							<a href="{{ url('/room/edit/'. $room->id) }}" class="btn btn-info btn-sm"> Edit</a>
							<form action="{{ url('/room/delete/'. $room->id) }}" method="post">
								@csrf
								{{ method_field('DELETE') }}
								<button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>

		{{ $rooms->links() }}
	</div>
</body>
</html>