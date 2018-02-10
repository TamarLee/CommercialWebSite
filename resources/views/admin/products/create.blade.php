@extends('../../layout')

@section('content')
<div class="container">
	<form method="POST" action="{{ url('/admin/products') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="name" class="col-md-4 control-label">სახელი</label>

			<div class="col-md-6">
				<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

				@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="description" class="col-md-4 control-label">აღწერა</label>

			<div class="col-md-6">
				<textarea name="description" id="description" class="form-control"></textarea>

				@if ($errors->has('description'))
				<span class="help-block">
					<strong>{{ $errors->first('description') }}</strong>
				</span>
				@endif
			</div>
		</div>
		
		<button class="btn btn-primary">დამატება</button>

	</form>
</div>
@endsection