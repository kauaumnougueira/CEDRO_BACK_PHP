<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller{
    public function index(){
        //exames
        $images = Image::where('id_user', Auth::user()->id)->get();

        return view('painel', compact('images'));
    }
}
