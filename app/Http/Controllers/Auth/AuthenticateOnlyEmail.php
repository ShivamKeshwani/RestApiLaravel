<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;


class AuthenticateOnlyEmail extends Controller
{

    public function create(Request $request){

        $uset = $request->email;
        $user = User::where('email', $uset)->first();
        if (! $user) {
            RateLimiter::hit("send message :".$user->id);
            return redirect('/login');
        }else {
            Auth::login($user);
            return redirect('/dashboard');
        }

    }

}
