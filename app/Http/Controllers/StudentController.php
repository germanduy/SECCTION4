<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(Request  $request){
//        $classTable = with(new Classes)->getTable();
//        $studentTalbe = with(new Student())->getTable();
//        $students = Student::leftJoin($classTable,$studentTalbe.".cid",'=',$classTable.".cid")
//        ->select($studentTable.".*",$classTable.'.name as className',$classTable.'.room')
//            ->Simplepaginate(8);
        $paramName = $request-> get("name");
        $paramClassID = $request->get("classID");
        $paramBirth1 = $request->get("date1");
        $paramBirth2 = $request->get("date2");
//        $students =Student::where('name','like','%'.$paramName.'%')->with("class")->simplePaginate(10);
//        $students =Student::Search($paramName)->with("class")->simplePaginate(10);
//        $students =Student::ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
        $students =Student::ClassFilter($paramClassID)
            ->Search($paramName)
            ->BirthdayFrom($paramBirth1)
            ->BirthdayTo($paramBirth2)
            ->with("classes")
            ->simplePaginate(10);
        $classeslist = Classes::all();
        return view("student.list-student",[
            "students"=>$students,
            "classeslist" =>$classeslist
        ]);
    }
    public function form(){
        $classesList = Classes::all();
        return view("student.add-student",['classesList'=>$classesList]);

    }
    public function create(Request  $request){
//        dd($request->all());
        Student::create (
            [
                "sid"=>$request->get("sid"),
                "name"=>$request->get("name"),
                "birthday"=>$request->get("birthday"),
                "cid"=>$request->get("cid"),
            ]
        );
        return redirect()->to("/student/list");
    }
}
//->select('students.*','classes.name as className','classes.room')
