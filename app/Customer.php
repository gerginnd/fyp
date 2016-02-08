<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	protected $table = 'users';

	public function colours(){
		return $this->hasMany('App\Colour', "user_id");
	}
}