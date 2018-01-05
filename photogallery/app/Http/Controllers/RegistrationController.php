<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{	
    public function create()
    {

    	if(auth()->check() && (auth()->user()->admin)==true){

    	return view('sessions.create');
  		  }
    	else

    		return redirect('/');
  	  }


    public function store()
    {
    	$this->validate(request(), [

    		'name' => 'required|min:4',
    		'email' => 'required|email',
    		'password' => 'required|min:6',

    	]);

    	User::create([

    		'name' => request()->name, 
    		'email' => request()->email,
    		'password' => bcrypt(request()->password),


    	]);

    	return redirect('/');
    }
}
