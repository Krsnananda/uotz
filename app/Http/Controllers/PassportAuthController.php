<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\User;

class PassportAuthController extends Controller
{
    /**
     * Registro req
     */
    public function register(Request $request)
    {
      $this->validate($request, [
        'nome' => 'required|min:4',
        'email' => 'required|email',
        'senha' => 'required|min:8',
      ]);

      $user = User::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'senha' => bcrypt($request->senha)
      ]);

      $token = $user->createToken('LaravelAuthApp')->accessToken;

      return response()->json(['token' => $token], 200);
    }

    /**
     * login req
     */
    public function login(Request $request)
    {
      $data = [
        'email' => $request->email,
        'password' => $request->password
      ];

      if(auth()->attempt($data)) {
        $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
        return response()->json(['token' => $token], 200);
      } else {
        return response()->json(['error' => 'Não autorizado'], 401);
      }
    }
}
