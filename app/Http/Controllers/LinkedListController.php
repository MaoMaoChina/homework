<?php
namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkedListController extends Controller
{
    public $timestamps = false;
    public function test1()
    {
        //return 'test1';
      // $linkedlist= DB::select('select * from testlinkedlist');
     //  var_dump($linkedlist);
      return view('Bolg/test', [
          'name'=> 'maomao',
          'age'=>19
      ]);
    }
    public function orm1()
    {
       echo '<pre>' ;
       //all()   //student 是Model表
        student::chunk(1,function ($xixi){
        var_dump($xixi);
    });
//        dd($xixi);
    }
    public function request1(Request $request)
    {
      echo  $request->input('name');
////          $student=  new student();
////          $student->theindex=7;
////          $student->value="jack";
////           $student->save();
////
////        $student=  new student();
////        $student->theindex=8;
////        $student->value="jack";
////        $student->save();
//        $student=student::find(7);
//        echo $student->created_at;

//
//        student::destroy(7);
//        student::destroy(5,6);
//        student::destroy([5,6]);
//        student::where()->delete();
    }

}
