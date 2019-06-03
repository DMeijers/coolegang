<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
	function showHomepage(){
		return view('homepage');	
	}
}
