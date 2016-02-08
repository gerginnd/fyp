<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model{
	protected $table = 'pollution';

	public function postcode(){
		return $this->belongsTo('App\Customer', 'postcode');
	}
}