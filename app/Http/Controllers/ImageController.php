<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index($id){
        $images = Image::where('id_user', $id)->get();

        return view('images.index', compact('images'));
    }
}
