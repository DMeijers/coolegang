<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitPostController extends Controller
{
 function showSubmitPostPage(){
 	return view('posts.submitPosts');
 }
}
