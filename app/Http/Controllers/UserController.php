<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->id != 1) {
            return redirect("/");
        }
        return view('pages.register');
    }

    public function store(RegisterRequest $request)
    {
        if (Auth::user()->id != 1) {
            return redirect("/");
        }
        $username = $request->username;
        $password = bcrypt($request->password);
        $newUser = ["username" => $username, "password" => $password];
        try {
            $user = User::create($newUser);
            return redirect('/user')->with(['registerSuccess' => 'Uspešno ste uneli komercijalistu!']);
        } catch (Exception $e) {
            return redirect('/user')->with(['registerError' => 'Došlo je do greške!']);
        }
    }
}
