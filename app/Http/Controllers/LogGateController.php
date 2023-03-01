<?php

namespace App\Http\Controllers;
use App\Models\UserLoginHistory;

use Illuminate\Http\Request;

class LogGateController extends Controller
{
    public function index(){
        return view('logate');
    }

    public function store(Request $request){

        $user = UserLoginHistory::where('name', $request->name)
                        ->where('email', $request->email)->get()->toArray();

        foreach($user as $u){
            return view('home')->with('user', $u);
        }
    }
}
