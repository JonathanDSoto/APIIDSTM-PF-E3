<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(LoginRequest $request) {
        if (Auth::attempt($request->only([
            'username',
            'password',
        ]))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
 
        return back()->withErrors([
            'email' => 'El nombre de usuario o contraseña no coinciden',
        ])->onlyInput('email');
    }
}
