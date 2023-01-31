<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function painel(){
        return view('painel');
    }

    public function perfil(){
        return view('perfil');
    }
}
