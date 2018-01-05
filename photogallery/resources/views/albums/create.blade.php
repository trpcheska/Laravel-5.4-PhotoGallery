@extends('layouts.app')


@section('content')

<h3>Create Album</h3>


<form method="POST" action='/photogallery/public/albums/create' enctype="multipart/form-data">

		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name: </label>

			<input type="text" class="form-control" name="name" id="name">
			
		</div>

		<div class="form-group">
			<label for="decsription">Decsription: </label>

			<input type="textarea" class="form-control" name="description" id="decsription">
			
		</div>
			
		<div class="form-group">
			<label for="cover_photo">Cover photo: </label>
			<input type="file" name="cover_photo" id="cover_photo">
		</div>

		<div class="form-group">
			
			<button  name="submit" type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
@endsection