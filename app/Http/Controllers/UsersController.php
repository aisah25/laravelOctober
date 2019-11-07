<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
	public function signup(){

    return view('users/signup');
}
public function signup_store(UserRequest $request)
{
	$credentials = [
		'first_name' => $request->input('first_name'),
		'last_name' => $request->input('last_name'),
		'email' => $request->input('email'),
		'password' => $request->input('password'),
	];
	Sentinel::registerAndActivate($credentials);
	Session::flash('notice','Success create new user');
	return rediract()->back();

}
}