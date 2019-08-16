<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Grocery extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'groceries';

	protected $fillable = [
		'name','type','price'
	];

	protected $casts = [
		'name' => 'string',
		'type' => 'string',
		'price' => 'integer'
	];
    //
}
