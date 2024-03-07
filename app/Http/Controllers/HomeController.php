<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /***
     -------------------------------------
    |index view 
    -------------------------------------
    ***/
    public function index() {
        $categories = Category::with('categoryDetails.images')->get();
        $first_category = $categories->shift();
        return View('home', compact('categories', 'first_category'));
    }
}
