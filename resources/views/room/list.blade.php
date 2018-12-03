@extends('layouts.master')

@push('scripts')

<script>
	var b = a + 1;
</script>

@endpush



@section('content')

	<h3 class="float-left">{{ __('room.room') }}</h3>
	<a href="{{ url('/room/create') }}" class="btn btn-primary float-right">Create</a>
	<div class="clearfix"></div>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>#</th>
				<th>{{ __('room.category') }}</th>
				<th>{{__('room.name')}}</th>
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
						<a href="{{ url('/room/edit/'. $room->id) }}" class="btn btn-info btn-sm float-left mr-2"> Edit</a>
						<form action="{{ url('/room/delete/'. $room->id) }}" method="post" class="float-left">
							@csrf
							{{ method_field('DELETE') }}
							<button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>

	{{ $rooms->links() }}

@endsection



