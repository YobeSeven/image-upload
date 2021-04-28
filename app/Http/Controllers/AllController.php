<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('home',compact('images'));
    }
}
