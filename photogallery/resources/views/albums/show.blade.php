@extends('layouts.app')

@section('content')

<h1>{{ $album->name }} </h1>
<a class="btn btn-secondary" href="/photogallery/public/">Go back</a>

<a class="btn btn-primary" href="/photogallery/public/photos/create/{{ $album->id }}">Upload photo</a>


<hr>
	
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
					
				@foreach($album->photos as $photo)
						


						
						<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe ">

						<h4>{{ $photo->title }} </h4>
						
						<a href="/photogallery/public/photos/{{ $photo->id }}">
						<img class="thumbnail" src="/photogallery/storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{ $photo->title }}">
						</a>
						<input type="checkbox" id="myCheck" >
						<button id='iId' value='<?=($photo->id); ?>' type="button" class="btn btn-primary btn-sm" onclick='addItem( {{ $photo->id }} );'>
          				<span class="glyphicon glyphicon-shopping-cart"></span> add to Cart
       					 </button>

						<hr>
						</div>
					
				@endforeach

				
				<div class="container">
					<form method="POST" action='/photogallery/public/orders/create'>
					<button class="btn btn-primary">Create Order</button>
					<input type="text" name='PictureList' id='PictureList'>
					</form>
				</div>

<script type="text/javascript">
		var itemId=[];
		function check() {
    		document.getElementById("myCheck").checked = true;
			}
		function addItem(photo_id)
		{
			

			var item =  photo_id;
				if(!itemId.includes(item)){
				itemId.push(item);
				check();
				}
			console.log(itemId);
			var x = document.getElementById("shoppingCart").innerHTML = itemId.length;
			document.getElementById("PictureList").innerHTML = itemId;
			console.log(x);
		}



	</script>



@endsection