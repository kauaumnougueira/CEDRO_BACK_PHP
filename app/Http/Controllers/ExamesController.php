<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

class ExamesController extends Controller
{
    public function exame(Request $request){
        $exames_nome = Image::where('nome', $request->input('pesquisa'))->get();

        return view('exame', ['exames_nome' => $exames_nome]);
    }
}
