<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;

class AlbumController extends Controller
{
   public function index()
   {

   	$albums = Album::with('photos')->get();
   	return view('albums.index')->with('albums', $albums);
   }

    public function create()
   {
   	return view('albums.create');
   }

   public function store()
   {
   	

    	$this->validate(request(), [

    		'name' => 'required',
    		'description' => 'required',
    		'cover_photo' => 'image|max:1999',
    
    	]);


    	$fileNameWithExt = request()->file('cover_photo')->getClientOriginalName();

    	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    	$extension = request()->file('cover_photo')->getClientOriginalExtension();

    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    	$path = request()->file('cover_photo')->storeAs('public/albums', $fileNameToStore);

    
    	$cover_photo = new Album;

    	$cover_photo->name = request()->name;
    	$cover_photo->description = request()->description;
    	$cover_photo->cover_photo = $fileNameToStore;
    	$cover_photo->save();
   		


    	return redirect('/albums');
    
   }

   public function show($id)
   {
   		$album = Album::with('photos')->find($id);

   		if($album!=null){

   		return view('albums.show')->with('album', $album);

   		}

   		else
   		return view('albums.create');
   }
}
