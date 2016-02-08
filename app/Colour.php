<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model{
	//protected $table = 'colours';

	public function customer(){
		return $this->belongsTo('App\Customer', 'user_id');
	}
}