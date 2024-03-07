<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /*
    -------------------------------------
    | render about view page 
    -------------------------------------
    */

    public function index() {
        return View('about'); 
    }
}
