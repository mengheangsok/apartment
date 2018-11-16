@extends('layouts.master')

@section('content')

<h3 class="float-left">Users</h3>
<div class="clearfix"></div>
	
<form action="{{ url('/user/'.$user->id) }}" method="post">
	@csrf
    {{ method_field('PATCH') }}
	<div class="form-group row">
	<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

		<div class="col-md-6">
			<input id="name" type="text" value="{{ old('name',$user->name) }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

			@if ($errors->has('name'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group row">
		<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

		<div class="col-md-6">
			<input id="email" type="email" value="{{ old('email',$user->email) }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

			@if ($errors->has('email'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right">Locations</label>
		<div class="col-md-6">
		<select name="location[]" multiple class="form-control">
			@foreach($locations as $location)
				<option 
                
                @if(in_array($location->id,$user->location->pluck('id')->toArray()))
                    selected
                @endif
                 
                  value="{{ $location->id }}">{{ $location->name }}</option>
			@endforeach
		</select>
		</div>
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>

@endsection



