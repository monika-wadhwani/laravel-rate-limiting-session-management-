<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
    public function rate_limit(Request $request){

        return response()->json(['message'=> 'This is rate limit']);
    }

    public function logout(Request $request){
        $ip = $request->ip();
        Session::forget('ip');// Clear session associated with the IP
        Cache::forget('session_' . $ip);
        auth()->logout();

        return redirect('/login'); 
    }
}
