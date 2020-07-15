<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $newUser = $request->all();
        $newUser['password'] = bcrypt($request->password);

        try {
            $user = User::create($newUser);
            return response(['user' => $user], 201);
        } catch (Exception $e) {
            return response(['error' => 'Došlo je do greške na serveru.'], 500);
        }
    }
}
