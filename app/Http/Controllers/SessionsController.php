<?php

namespace App\Http\Controllers;

// use App\Http\Requests\;

use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;

use Sentinel;
use Session;
class SessionsController extends Controller
{
    public function login()
    {
    	if($user = Sentinel::check())
    		{
    			Session::flash("notice","You has login".$user->email);
    			return redirect('/');
    		}
    		else
    		{
    			return view('sessions.login');
    		}
    }
    public function login_store(SessionRequest $request)
    {
    	if($user = Sentinel::authenticate($request->all()))
    		{
    			Session::flash('notice','Welcome '.$user->email);
    			return redirect('/');
    		}else
    		{
    			Session::flash("notice","Login fails");
    			return view ('sessions.login');
    		}
    }
    public function logout()
    {
    	Sentinel::logout();
    	Session::flash("notice","logout success");
    	return redirect('/');
    }
}
