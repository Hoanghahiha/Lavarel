<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }
    public function categoryList(){
        return view("student\list");
    }
    public function productList(){
        return view("class\list");
    }
}
