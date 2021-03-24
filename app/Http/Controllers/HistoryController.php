<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
   public function home($c){
    $desc='lorem ipsum';
    $emps=array('A','B','C');
    return view('history',compact('c','desc','emps'));
   }
}
