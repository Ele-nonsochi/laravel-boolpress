<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\category;


class PostController extends Controller
{
    public function index(Request $request) {
         $category = $request->query("category");

         $postsList = Post::with("category")
          ->with("tags")->paginate(4);
       /*  $postsList = Post::All(); */
        /* foreach ($postsList as $post) {
          $body = strip_tags($post->body);
    
          $post["body"] = strlen($body) > 200 ? substr($body, 0, 200) . "..." : $body;
        } */
        if ($category) {
          $postsList = $postsList->where("category_id", $category);
        }

        return $postsList;
      } 

      public function getPost($id) {
        $postSingle = Post::where('id', $id)->with("category")
        ->with("tags")->first();

        return $postSingle;  /* return response()->json($postSingle); */
     } 
}
