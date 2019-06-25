<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomepageController extends Controller
{
	function showHomepage(){

		$user = Auth::user();

	    return view('frontpage.frontpage', compact('user'));
	}
}
