<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Redirectresponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;


class AuthenticatedSessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request) :Redirectresponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request) : Redirectresponse
    {
        Auth::guard('web')->logout();
                
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
