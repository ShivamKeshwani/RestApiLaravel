<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLoginHistory;
use App\Events\SendMailOnLogin;
use App\Jobs\SendMail;

class LogAtController extends Controller
{
    public function index(){
        return view('logat');
    }

    public function mailto(Request $request){

        $user = UserLoginHistory::where('name', $request->name)
                        ->where('email', $request->email)->get()->toArray();

        foreach($user as $u){
         SendMail::dispatch($u)->onQueue('emails');
        }
    }
}
