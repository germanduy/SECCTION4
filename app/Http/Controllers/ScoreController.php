<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function all(Request  $request){
        $studentList = Student::all();
        $subjectList = Subject::all();
        $paramark = $request->get("mark");
        $pararesult = $request->get("result");
        $pararstudent = $request->get("sid");
        $pararsubject = $request->get("sbid");
        $scores = Score::Searchmark($paramark)
            ->Searchresult($pararesult)
            ->student($pararstudent)
            ->subject($pararsubject)
            ->Simplepaginate(5);
        return view("score.list-score",[
            "scores"=>$scores,
            "studentList"=>$studentList,
            "subjectList"=>$subjectList
            ]);
    }
    public function form(){
        $studentList = Student::all();
        $subjectList = Subject::all();
        return view("score.add-score",['studentList'=>$studentList],['subjectList'=>$subjectList]);
    }
    public function create(Request  $request){
        Score::create([
                "mark"=>$request->get("mark"),
                "result"=>$request->get("result"),
                "sid"=>$request->get("sid"),
                "sbid"=>$request->get("sbid"),
            ]
        );
        return redirect()->to("/score/list");
    }
}
