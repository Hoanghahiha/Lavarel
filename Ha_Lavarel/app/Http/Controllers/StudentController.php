<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentList(Request $request){
        //$classes = Classes::all();
        //$classes = Classes::where("cid",'like','TH1%')->get();
        //$classes = Classes::orderBy("name","asc")->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->get();
        //$classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->skip(5)->get();
        //$classes = Classes::paginate(5);
        //$classTable = with(new Classes)->getTable();
        //$studentTable = with(new Student())->getTable();
        //$students = Student::leftJoin($classTable, $studentTable.".cid",'=', $classTable.".cid")
        //->select($studentTable.'.*',$classTable.'.name as className',$classTable.'.room')->simplePaginate(10);
        //dd($student);
        $classesList = Classes::all();
        $paramName = $request -> get("name");
        $paramClassID = $request -> get("classID");
        $paramDate = $request ->get("date");
        //$student = Student::Search($paraName)->with("classes")->simplePaginate(10);
        $student = Student::BirthdayFrom($paramDate)->BirthdayTo("")->ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
        //$student = Student::with("classes")->simplePaginate(5);
        return view("student.list",[
            "student"=>$student,
            "classesList"=>$classesList
        ]);
    }
    public function studentForm(){
        $classesList = Classes::all();
        return view("student.form",['classList'=>$classesList]);
    }
    public function studentCreate(Request $request){
       Student::create(
           [
               "sid"=>$request ->get("sid"),
               "name"=>$request ->get("name"),
               "birthday"=>$request ->get("birthday"),
               "cid"=>$request ->get("cid"),
           ]
       );
        return redirect()->to("/studentList");
    }
}
