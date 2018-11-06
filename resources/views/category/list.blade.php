<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<br>
		<h3 class="float-left">categories</h3>
		<a href="{{ url('/category/create') }}" class="btn btn-primary float-right">Create</a>
		<div class="clearfix"></div>
		<table class="table mt-3">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Option</th>
				</tr>
			</thead>
			@php $n = 1 @endphp
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $category->name }}</td>
						<td>{{ $category->price }}</td>
						<td>{{ $category->description }}</td>
						<td>
							<a href="{{ url('/category/edit/'. $category->id) }}" class="btn btn-info btn-sm"> Edit</a>
							<form action="{{ url('/category/delete/'. $category->id) }}" method="post">
								@csrf
								{{ method_field('DELETE') }}
								<button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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