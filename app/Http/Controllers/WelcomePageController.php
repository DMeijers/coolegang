<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
 function showWelcomepage(){
 	return view('welcome');
 }
}
