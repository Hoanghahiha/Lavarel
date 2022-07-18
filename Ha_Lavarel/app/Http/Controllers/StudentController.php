<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentList(){
        //$classes = Classes::all();
        //$classes = Classes::where("cid",'like','TH1%')->get();
        //$classes = Classes::orderBy("name","asc")->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->skip(5)->get();
        //$classes = Classes::paginate(5);
        $student = Student::simplePaginate(5);
        //var_dump($classes);
        //dd($classes);
        return view("student\list",["student"=>$student]);
    }
}
