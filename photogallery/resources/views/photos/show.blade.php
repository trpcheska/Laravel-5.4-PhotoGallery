@extends('layouts.app')


@section('content')
	
	<style>
		.thumbnail{

			width: 300px;
			height: 300px;

		}

		.h4
		{
			font-family: "Times New Roman", Times, serif;
		}
	</style>
			
			@foreach($photos as $photo)
					
					<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe ">
						<h4>{{ $photo->title }} >> {{$photo->album->name}}</h4>
						<a href="/photogallery/public/photos/{{ $photo->id }}">
						<img class="thumbnail" src="/photogallery/storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{ $photo->title }}">
						</a>
					</div>

					
				
			@endforeach


@endsection