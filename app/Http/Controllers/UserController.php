<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\ImageController;

class UserController extends Controller
{
    public function update(Request $request){
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->telefone = $request->input('telefone');
        $user->endereco = $request->input('endereco');
        $user->save();

        $perfil = new ImageController;
        $exames = $perfil->consulta();
        return redirect()->route('perfil', ['exames' => $exames]);
    }
}
