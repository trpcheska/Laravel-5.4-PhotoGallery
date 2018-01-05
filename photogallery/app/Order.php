<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];


    public function photos()
    {
    	return $this->belongsToMany(Photo::class);
    }
}
