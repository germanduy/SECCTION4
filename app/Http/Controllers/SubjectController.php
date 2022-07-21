<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function all(Request  $request){
        $paraName = $request->get("name");
//        $subjects = Subject::Simplepaginate(5);
//        $subjects = Subject::all()->simplePaginate(5);
        $subjects = Subject::Search($paraName)->simplePaginate(5);
        return view("subject.list-subject",[
            "subjects"=>$subjects]);
    }
    public function form(){
        return view("subject.add-subject");
    }
    public function create(Request  $request){
        Subject::create([
                "sbid"=>$request->get("sbid"),
                "name"=>$request->get("name")
        ]
        );
        return redirect()->to("/subject/list");
    }
}
