<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(Request $request){
//        $classes = Classes::all();
//        dd($classes);
//        $classes= Classes::where("cid",'like','TH9')->get();
//        $classes = Classes::orderBy("name","asc")->get();
//        $classes = Classes::orderBy("name","asc")
//            ->select('name','room')
//            ->limit(5)
//            ->skip(5)
//            ->get();
        $paraname = $request-> get("name");
        $pararoom = $request-> get("room");
        $classes =Classes::withCount("students")->Searchname($paraname)->Searchroom($pararoom)->Simplepaginate(5);
//        $classes = Classes::Simplepaginate(5);
        return view("class.list-class",[
            "classes"=>$classes
        ]);
    }
    public function form(){
        return view("class.add-class");

    }
    public  function create(Request $request){
        Classes::create([
            "cid"=>$request->get("cid"),
            "name"=>$request->get("name"),
            "room"=>$request->get("room"),
        ]);
        return redirect()->to("/class/list");
    }
}
