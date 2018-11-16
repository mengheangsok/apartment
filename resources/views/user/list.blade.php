@extends('layouts.master')

@section('content')

	<h3 class="float-left">Users</h3>
	<a href="{{ url('/user/create') }}" class="btn btn-primary float-right">Create</a>
	<div class="clearfix"></div>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Option</th>
			</tr>
		</thead>
		@php $n = 1 @endphp
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $n++ }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						<a href="{{ url('/user/'. $user->id.'/edit') }}" class="btn btn-info btn-sm float-left mr-2"> Edit</a>
						<form action="{{ url('/user/delete/'. $user->id) }}" method="post" class="float-left">
							@csrf
							{{ method_field('DELETE') }}
							<button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>

	{{ $users->links() }}

@endsection



