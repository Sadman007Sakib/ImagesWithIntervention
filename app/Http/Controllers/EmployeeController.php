<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        //we are using this to show data of database
        $employees = Employee::all();
       return view ('employees', compact('employees'));
    }
    public function create(){
        return view('create');

    }
    public function store(Request $request){
        $name   =$request->name;
        $email  =$request->email;
        $age    =$request->age;
        $salary =$request->salary;
        $details=$request->details;

        $obj    =new Employee();
        $obj->name=$name;
        $obj->email=$email; 
        $obj->age= $age;
        $obj->salary= $salary;
        $obj->details=$details;

        if($obj->save())
        {
           return redirect()->to('create-employee');

        }

    }

    public function edit($id){
        
        //$employee= Employee:: where('id','=',$id)->get();
        $employee= Employee:: find($id); 
        return view('edit',compact('employee'));

    }

    public function update(Request $request,$id ){
        $employee= Employee:: find($id);
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->age=$request->age;
        $employee->salary=$request->salary;
        $employee->details=$request->details;
        if($employee->save()){
            return redirect()->to('employees');
        }
    }

    public function delete($id){
        $employee = Employee:: find($id);
        if($employee->delete()){
            return redirect()->to('employees');
        }

    }

}
