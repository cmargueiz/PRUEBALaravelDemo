<?php

namespace App\Http\Controllers;

use App\tw_usuarios;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpseclib\Crypt\Random;
use Illuminate\Support\Str;

class LoginApiController extends Controller
{
    use AuthenticatesUsers;


    public function login(Request $request)
    {
        $user=tw_usuarios::whereEmail($request->email)->first();
        if ((!is_null($user)) && Hash::check($request->password,$user->password)) {
            $token=$user->createToken('laravel')->accessToken;
            return response()->json([
                'res'=>true,
                'token'=>$token,
                'message'=> 'Ingreso correctamente, bienvenido'
            ],status:200);
        }else{
            return response()->json([
                'res'=>false,
                'message'=> 'Email o password incorrecto.Usuario no encontrado'
            ],status:404);
        }
    }

    public function logout()
    {
        $user =  auth()->user();
        $user->tokens->each(function ($token,$key)
        {
            $token->delete();
        });
        $user->save();
        return response()->json([
            'res'=>true,
            'token'=>$user->verification_token,
            'message'=> 'Ha salido del sistema'
        ],status:200);

    }

}
