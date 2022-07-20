<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function classList(Request $request){
        //$classes = Classes::all();
        //$classes = Classes::where("cid",'like','TH1%')->get();
        //$classes = Classes::orderBy("name","asc")->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->skip(5)->get();
        //$classes = Classes::paginate(5);
        $studentList = Classes::all();
        $paramName = $request -> get("name");
        $paramClassID = $request -> get("classID");
        $paramRoom = $request -> get("room");
        //$classes = Classes::withCount("students")->simplePaginate(5);
        $classes = Classes::Search($paramName)->SearchID($paramClassID)->SearchRoom($paramRoom)->withCount("students")->simplePaginate(5);
        //var_dump($classes);
        //dd($classes);
        return view("class.list",[
            "classes"=>$classes,
            "studentList"=>$studentList]);
    }
    public function classForm(){
        $studentList = Classes::all();
        return view("class.form",['studentList'=>$studentList]);
    }
    public function classCreate(Request $request){
        Classes::create(
            [
                "cid"=>$request ->get("cid"),
                "name"=>$request ->get("name"),
                "room"=>$request ->get("room"),
            ]
        );
        return redirect()->to("/classList");
    }
}
