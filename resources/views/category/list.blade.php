<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="container">
		<br>
		@include('components.alert')
		
		<h3 class="float-left">categories</h3>
		<a href="{{ url('/category/create') }}" class="btn btn-primary float-right">Create</a>
		<div class="clearfix"></div>
		<table class="table mt-3">
			<thead>
				<tr>
					<th>#</th>
					<th>Room</th>
					<th>Name</th>
					<th>Option</th>
				</tr>
			</thead>
			@php $n = 1 @endphp
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $n++ }}</td>
						<td>
								<ul>
							@foreach($category->room as $room)
									<li>{{ $room->name }}</li>
							@endforeach							
								</ul>
						</td>
						<td>{{ $category->name }}</td>
						<td>
							<a href="{{ url('/category/'. $category->id.'/edit') }}" class="btn btn-info btn-sm float-left mr-2"> Edit</a>
							<form action="{{ url('/category/'. $category->id) }}" method="post">
								@csrf
								{{ method_field('DELETE') }}
								<button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>

		{{ $categories->links() }}
	</div>
</body>
</html>