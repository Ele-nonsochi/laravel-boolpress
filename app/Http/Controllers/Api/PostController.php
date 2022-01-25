<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\category;


class PostController extends Controller
{
    public function index() {
         $postsList = Post::with("category")
          ->with("tags")->paginate(4);
       /*  $postsList = Post::All(); */
        /* foreach ($postsList as $post) {
          $body = strip_tags($post->body);
    
          $post["body"] = strlen($body) > 200 ? substr($body, 0, 200) . "..." : $body;
        } */
    
        return $postsList;
      } 
}
