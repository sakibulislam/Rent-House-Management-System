<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterBladeController extends Controller
{
    public function index(){

    	return view('master');
    }
}
