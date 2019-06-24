<?php
namespace App\Http\Processors;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PostProcessor
{

    /**
     * Store the note in the database and flush the cache.
     * @param Request $request Post request.
     */
	public function createPost($content , $user_id)
	{

		// Prepare data.
		$data = $this->prepareData($content, $user_id);

		// Create catagory.
		$post = Post::create($data);

		return $post;
	}

    /**
     * Prepare the data from the POST request.
     * @param Request $request Post request.
     */
	private function prepareData($content, $user_id)
	{
		// Set data array.
		$data = [
			'content' => $content,
			'user_id' => $user_id,
		];

		return $data;
	}

}
