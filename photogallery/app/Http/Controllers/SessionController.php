<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class SessionController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }

   public function create()
   {
   	return view('sessions.login');
   }

   public function destroy()
   {
   	auth()->logout();

   	return redirect('/');
   }

   public function check()
   {
   		if(! auth()->attempt(request(['email', 'password']))) {

   			return back();
   		}


   		return redirect('/');
   }
}
