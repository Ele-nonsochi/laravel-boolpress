<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CategoryController extends Controller
{
    function index(){
        /* $categories = Category::All(); */
        $categories = Category::orderBy("name")->get();

        /* return $categories; */ return response()->json($categories);
    }

    function show($categoryId) {
        $category = Category::where("id", $categoryId)
          ->with(["posts", "posts.category", "posts.user", "posts.tags"])
          ->first();
    
        return $category;
      }
}
