

@foreach ($photos as $photo)

<img class="thumbnail" src="/photogallery/storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{ $photo->title }}">


@endforeach