<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Order;

class OrderController extends Controller
{
	protected $guarded = [];

   public function index($id)
   {
   		$order = Order::find($id);

   		$photos = $order->photos;
   		return view('orders.index')->with('photos', $photos);
   }

   public function store()
   {
   	if(auth()->check())
   	{
   		$this->validate(request(), [

   		'PictureList' => 'required',
   		]);

   		dd(request()->'PictureList');
   		$order = new Order;

   		$order->user_id= auth()->user()->id;

   		$order->save();



   	}
   }	
}
