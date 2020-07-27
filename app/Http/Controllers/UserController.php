<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(RegisterRequest $request)
    {
        $newUser = $request->only('username', 'password', 'password_confirmation');
        try {
            $user = User::create($newUser);
            return redirect('/user')->with(['registerSuccess' => 'Uspešno ste uneli komercijalistu!']);
        } catch (Exception $e) {
            return redirect('/user')->with(['registerError' => 'Došlo je do greške!']);
        }
    }
}
