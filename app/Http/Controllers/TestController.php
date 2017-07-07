<?php

namespace Tutorial\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name, $age)
    {
    	if($age<18)
    	{
    		return 'No deberías estar acá '.ucfirst($name).'.';
    	}
    	else
    	{
    		return 'Bienvenido '.ucfirst($name).'.';
    	}
    }
}
