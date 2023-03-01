<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserLoginHistory;

class EventController extends Controller
{
    public function index(Request $request){
       
        UserLoginHistory::dispatch($request);
        return view('event-demo');
    }
}
