<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeGuestController extends Controller
{
    public function index()
    {
        return view('homeguest');
    }
}
