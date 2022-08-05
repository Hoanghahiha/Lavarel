<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class WebController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }
    public function index(){
        return view("usersPage\index");
    }
    public function profile(){
        return view("usersPage\profile");
    }

    public function home(){
        if(!Cache::has("home_data")){
            $classes = Classes::all();
            $students = Student::with("classes")->get();
            $subjects = Subject::all();
            $home_data = [
                'classes'=>$classes,
                'students'=>$students,
                'subject'=>$subjects,
            ];
            // caching
            Cache::put("home_data",$home_data,Carbon::now()->addDays(2));

//            Cache::forever("home_data",$home_data);
        }

        return view('welcome',Cache::get("home_data"));
    }

    public function subjectList(){
        return view("subject\list");
    }
    public function scoreList(){
        return view("score\list");
    }
    public function apiStudent(Request $request){
        $limit = $request->has("limit")?$request->get("limit"):20;
        $page = $request->has("page")?$request->get("page"):1;
        $offset = ($page-1)*$limit;
        $students = Student::skip($offset)->limit($limit)->select("*")->get();
        return response()->json([
            "status"=>true,
            "message"=>"Success",
            "datas"=>$students
        ],200);
    }
}
