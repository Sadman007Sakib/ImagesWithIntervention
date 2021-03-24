<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function create(){
        return view('studentCreate');

    }
    public function store(Request $req){
        $todayDate = date('Y-m-d');
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer',
            'credits' => 'required|integer|between:20,30',
            // 'dob' => 'required|date'
            'dob' => 'required|date_format:Y-m-d|before_or_equal:'.$todayDate
        ]);

        $obj = new Student();
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->age = $req->age;
        $obj->credits = $req->credits;
        $obj->dob = $req->dob;
        if($obj->save()){
            return redirect()->to('create-student')->with('smssg','Account Added Successfully');
        }
    }
}
