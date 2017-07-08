<?php

namespace Tutorial\Http\Controllers;

use Illuminate\Http\Request;
use Tutorial\User;

class UserController extends Controller
{
    public function show($user)
    {
    	$usr = User::find($user);
    	return view('user', compact('usr'));
    }
}
