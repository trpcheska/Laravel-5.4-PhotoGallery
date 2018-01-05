@extends('layouts.app')

@section('content')
	<form method="POST" action='/photogallery/public/photos/store' enctype="multipart/form-data">
	
		{{ csrf_field() }}

		<div class="form-group">
			<label for="title">Title: </label>

			<input type="text" class="form-control" name="title" id="title">
			
		</div>

		<input type="text" class="form-control" name="album_id" id="album_id" value="{{$album_id}}" hidden>


		<div class="form-group">
			<label for="decsription">Decsription: </label>

			<input type="textarea" class="form-control" name="description" id="decsription">
			
		</div>

		
			

		<div class="form-group">
			<input type="file" name="photo" id="photo">
		</div>

		<div class="form-group">
			
			<button  name="submit" type="submit" class="btn btn-primary">Submit </button>
		</div>

	</form>
@endsection