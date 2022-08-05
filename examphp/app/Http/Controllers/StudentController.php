<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(){

        $students = Student::all();
        return view("student.student-list",[
            'students'=>$students
        ]);

    }

    public function form(){
        return view("student.add-student");
    }

    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'address'=>'required',
            'telephone'=>'required',
        ]);

        Student::create([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]
        );
        return redirect()->to("/student/list");
    }
}
