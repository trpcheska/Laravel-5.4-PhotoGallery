<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;
use App\Photo;
class PhotoController extends Controller
{
    public function create($album_id)
    {	
    	//if(auth()->check() && (auth()->user()->admin)==true){
    		
    		return view('photos.create')->with('album_id', $album_id);
    	//}

    	//else
    	//return redirect('/');
    }

    public function show()
    {
    	$photos = Photo::get();

    	return view('photos.show')->with('photos', $photos);
    }


    public function store()
    {

    	//if(auth()->check() && (auth()->user()->admin)==true){


    	$this->validate(request(), [

    		'title' => 'required',
    		'description' => 'required',
    		'photo' => 'image|max:1999',

    	]);


    	$fileNameWithExt = request()->file('photo')->getClientOriginalName();

    	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    	$extension = request()->file('photo')->getClientOriginalExtension();

    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    	$path = request()->file('photo')->storeAs('public/photos/'.request()->album_id, $fileNameToStore);

    
    	$photo = new Photo;
    	$photo->title = request()->title;
    	$photo->description = request()->description;
    	$photo->photo = $fileNameToStore;
    	$photo->album_id=request()->album_id;
    	$photo->save();
   	//	}


    	return redirect('/albums/'.request()->album_id);
    }

    public function destroy($id)
    {
    	$photo = Photo::find($id);

    	if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo))
    		{
    			$photo->delete();
    		}

    		return redirect('/');
    }
}
