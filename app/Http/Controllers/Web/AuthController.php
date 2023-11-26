<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
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
            'username' => 'El nombre de usuario o contraseña no coinciden',
        ])->onlyInput('username');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('login');
    }

    public function signup(SignUpRequest $request) {
        User::create($request->validated());
        return redirect()->route('login')->with('status', '¡Usuario creado exitosamente!');
    }
}
