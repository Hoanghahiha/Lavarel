<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }


    public function subjectList(){
        return view("subject\list");
    }
    public function scoreList(){
        return view("score\list");
    }
}
