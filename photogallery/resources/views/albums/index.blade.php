@extends('layouts.app')


@section('content')
	
			@foreach($albums as $album)
			

					 <div class="container">       				 
					 <div  class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
					 	<h3 class="gallery-title">{{ $album->name }}</h3>
						<hr>
						<a  href="/photogallery/public/albums/{{ $album->id }}">
						
						<img  class="thumbnail" src="/photogallery/storage/app/public/albums/{{$album->cover_photo}}" alt="{{ $album->name }}">
					</a>
					 </div>
		

			@endforeach
					</div> 


@endsection