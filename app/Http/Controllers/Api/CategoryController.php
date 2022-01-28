<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function index(){
        /* $categories = Category::All(); */
        $categories = Category::orderBy("name")->get();

        return $categories;
    }
}
