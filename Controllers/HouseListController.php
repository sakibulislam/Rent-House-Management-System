<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseListController extends Controller
{
    public function index(){

    	$data= House::all();
		return view('house_list')->with('data',$data);
    }
}
