<?php

namespace App\Http\Controllers;

use App\Events\CreateAStudent;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    private $GRID_URL = "/admin/studentList";
    public function studentList(Request $request){
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
//        $u = Auth::user();
//        if (!$u->is_admin) abort(404);
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
        return view("student.form",['classesList'=>$classesList]);
    }
    public function studentCreate(Request $request){
        $request->validate([
           'sid'=>'required|string|unique:students',
            'name'=>'required',
            'birthday'=>'required',
            'image'=>"image|mimes:jpeg,png,jpg,gif"
        ],[
            'required'=>'Vui lòng nhập thông tin',
            'image'=>'Vui lòng nhập đúng ảnh',
            'mines'=>'Nhập đúng định dạng ảnh'
        ]);
        $image = null;
        if ($request->hasFile("image")){
            $file = $request->file("image");
            $path = "upload/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $image = $path.$fileName;
        }
       $student = Student::create(
           [
               "sid"=>$request ->get("sid"),
               "name"=>$request ->get("name"),
               "image"=>$image,
               "birthday"=>$request ->get("birthday"),
               "cid"=>$request ->get("cid"),

           ]
       );
        event(new CreateAStudent($student));
        // Cache::flush();
        return redirect()->to($this->GRID_URL)->with("success","Create Student Successfully");
    }
    public function studentEdit($id){
        $classesList = Classes::all();
        $student = Student::find($id);
        return view('student.edit',[
            'student'=>$student,
            'classesList'=>$classesList
        ]);
    }

    public function studentUpdate(Request $request, Student $student){
        $student->update([
            "name"=>$request ->get("name"),
            "birthday"=>$request ->get("birthday"),
            "cid"=>$request ->get("cid"),
        ]);
        return redirect()->to($this->GRID_URL)->with("success","Update Student Successfully");
    }
    public function studentDelete(Student $student){
        try {
            $student->delete();
            return redirect()->to($this->GRID_URL)->with("success","Delete Student Successfully");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Delete Fail");
        }

    }
}
