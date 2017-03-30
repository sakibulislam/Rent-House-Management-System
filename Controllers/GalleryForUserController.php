<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryForUserController extends Controller
{
    public function index()
    {
        return view('gallery_for_user');
    }
}
