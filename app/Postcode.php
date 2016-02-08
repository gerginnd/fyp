<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model{
	//protected $table = 'postcodes';

	public function ratings(){
		return $this->hasMany('App\Rating', "postcode");
	}
}