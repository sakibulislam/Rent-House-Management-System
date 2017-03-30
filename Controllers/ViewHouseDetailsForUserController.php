<?php

namespace App\Http\Controllers;
use App\House;

use Illuminate\Http\Request;

class ViewHouseDetailsForUserController extends Controller
{
    public function index(){

    	$data= House::all();
		return view('view_house_details_for_user')->with('data',$data);
    }
}
