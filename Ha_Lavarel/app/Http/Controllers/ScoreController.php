<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function scoreList(Request $request){
        $studentList = Student::all();
        $subjectList = Subject::all();
        $paramMath = $request -> get("math");
        $paramResult = $request -> get("result");
        $paramStudentID = $request ->get("studentID");
        $score = Score::StudentFilter($paramStudentID)->Search($paramMath)->ResultSearch($paramResult)->with("student")->simplePaginate(10);
        return view("score.list",[
            "score"=>$score,
            "studentList"=>$studentList,
            "subjectList"=>$subjectList
        ]);
    }
    public function scoreForm(){
        $studentList = Student::all();
        $subjectList = Subject::all();
        return view("score.form",[
            'studentList'=>$studentList,
            "subjectList"=>$subjectList
        ]);
    }
    public function scoreCreate(Request $request){
        Score::create(
            [
                "scid"=>$request ->get("scid"),
                "math"=>$request ->get("math"),
                "result"=>$request ->get("result"),
                "sid"=>$request ->get("sid"),
                "sbid"=>$request ->get("sbid")
            ]
        );
        return redirect()->to("/scoreList");
    }
}
