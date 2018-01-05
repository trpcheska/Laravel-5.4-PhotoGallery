@extends('layouts.app')


@section('content')

<h1> Log in </h1>

<form method="POST" action="/photogallery/public/login">

	{{ csrf_field() }}

		<div class="form-group">
			<label for="email">Email: </label>

			<input type="email" class="form-control" name="email" id="email">
			
		</div>

		<div class="form-group">
			<label for="password">Password: </label>

			<input type="password" class="form-control" name="password" id="password">
			
		</div>


		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Log in </button>
		</div>


</form>

@endsection