<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller{

    public function consulta(){
        $images = Image::where('id_user', Auth::user()->id)->get();
        return $images;
    }

    public function index(){
        //exames
        $images = ImageController::consulta();
        return view('painel', compact('images'));
    }

    public function exames(){
        $exames = ImageController::consulta();
        return view('perfil', ['exames' => $exames]);
    }

    public function edit(){
        $exames = ImageController::consulta();
        return view('edit', ['exames' => $exames]);
    }
}
