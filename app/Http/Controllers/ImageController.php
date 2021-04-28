<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function image(){
        $images = Image::all();
        return view('backend.index-admin',compact('images'));
    }
    public function create(){
        return view('backend.form-img.image-store');
    }
    public function store(Request $request){
        Storage::put('public/img/', $request->file('image'));
        
        $image = new Image();
        $image->src = $request->file('image')->hashName();
        $image->save();
        return redirect()->route('admin');
    }
}
