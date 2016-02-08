<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Postcode as Postcode;
use App\Rating as Rating;


class PollutionController extends Controller
{
    public function retrieve(){
    $pc = Request::get('postcode');
    $icity = Postcode::where("Postcode", "=", "$pc")->first();
    $itemsair = Rating::where("Postcode", "=", "$pc")->where("Type", "=", "Air")->get();
    $itemsnoise = Rating::where("Postcode", "=", "$pc")->where("Type", "=", "Noise")->get();
    $itemsland = Rating::where("Postcode", "=", "$pc")->where("Type", "=", "Land")->get();
    return view('display', compact('itemsair', 'itemsnoise', 'itemsland', 'icity'));
    }

    public function submitreview(){
    $pc = Request::get('pc');
    $name = Request::get('username');
    $type = Request::get('type');
    $rating = Request::get('rating');
    $review = Request::get('review');
    Rating::insert(['Postcode' => $pc, 'Type' => $type, 'Name' => $name, 'Rating' => $rating, 'Review' => $review]);
    return view('welcome');
    }
}
