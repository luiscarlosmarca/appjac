<?php

namespace Appjac\Http\Controllers;

use Illuminate\Http\Request;

use Appjac\Http\Requests;
use Appjac\Http\Controllers\Controller;

class Homecontroller extends Controller
{
    
    public function index()
    {
    	return view('layout');
    }
}
