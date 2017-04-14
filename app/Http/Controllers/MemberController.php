<?php
namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    public function __construct()
    {
             return view('testlinkedlist.construct');
    }

    public function insert()
    {
        return view('testlinkedlist.insert');
//        $length = DB::table('testlinkedlist')->count();
//        $distance=$index-$length;
//        if($distance>1)
//        {
//            echo "You did not define the value before current place";
//            echo "<br/>";
//        }
//        else
//        {
//            echo 'The value you inserted is '.$s.' and the index is '.$index;
//            echo "<br/>";
//            DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
//                ,    [$index,$s]);
//        }
    }
    public function delete()
    {
        return view('testlinkedlist.delete');
//        $length = DB::table('testlinkedlist')->count();
//        $distance=$index-$length;
//        if($distance>=1)
//        {
//            echo "Sorry, No data to be deleted.";
//            echo"<br/>";
//        }
//        else
//        {
//            echo 'The index '.$index.' is that what you want to delete.';
//            echo "<br/>";
//             DB::table('testlinkedlist')
//                 ->where('theindex',$index)
//                 ->delete();
//            DB::table('testlinkedlist')
//                ->where('theindex','>',$index)
//                ->decrement('theindex');
//        }
    }
    public function push()
    {
        return view('testlinkedlist.push');
     // return view('testlinkedlist.push');
//        $length = DB::table('testlinkedlist')->count();
//        $index=$length+1;
//        DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
//            ,    [$index,$s]);
//        echo 'The value '.$s.' you pushed is in index '.($index);
    }
    public function pop()
    {
        $length = DB::table('testlinkedlist')->count();
        $data=  DB::table('testlinkedlist')
              ->where('theindex',$length)
              ->get();
        DB::table('testlinkedlist')
                ->where('theindex',$length)
                 ->delete();
        return view('testlinkedlist.pop',[
            'length'=>$length,
            'data'=>$data,
        ]);
//        if($length==0)
//        {
//            echo "Sorry,the data is null.";
//            echo"<br/>";
//        }
//        else
//        {
//         $data=  DB::table('testlinkedlist')
//               ->where('theindex',$length)
//               ->get();
//         dd($data);
//        }
    }
    public function size()
    {
        $length = DB::table('testlinkedlist')->count();
        return view('testlinkedlist.size',[
            'length'=>$length,
            ]);
//        if($length==0)
//        {
//            echo "Sorry, the data is null.";
//            echo" <br/>";
//        }
//        else
//        {
//            return 'The size of the data is '.$length.'.';
//        }
    }
    public function print_list()
    {
        $length = DB::table('testlinkedlist')->count();
        $data=DB::table('testlinkedlist')
               ->get();
        return view('testlinkedlist.print_list',[
             'length'=>$length,
            'data'=>$data,
            ]);
//        if($length==0)
//        {
//            echo "Sorry,the data is null.";
//            echo "<br/>";
//        }
//
//        else
//        {
//          $data=DB::table('testlinkedlist')
//                ->get();
//          dd($data);
//        }
//    }
//     public function query3()
//     {
//     $max  =   DB::table('testlinkedlist')
//            ->sum('theindex');
//     var_dump($max);
     }
     public function save(Request $request)
     {
        $a=$request->input('student');
         $length= DB::table( 'testlinkedlist')->count();
         $index=$length+1;
     //  $student =new student();
   //   $student->theindex=$index;
    //  $student->value=$a['value'];

        DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
           ,    [$index,$a['value']]);
         return view('testlinkedlist.return');

     }
     public function deleteTwo(Request $request)
     {
         $a=$request->input('student');
         $length = DB::table('testlinkedlist')->count();
         $distance=$a['theindex']-$length;
        if($distance>=1)
        {
            return view('testlinkedlist.falseTwo');
        }
        else
        {
             DB::table('testlinkedlist')
                 ->where('theindex',$a['theindex'])
                 ->delete();
            DB::table('testlinkedlist')
                ->where('theindex','>',$a['theindex'])
                ->decrement('theindex');
            return view('testlinkedlist.return');
        }

     }
     public function insertTwo(Request $request)
     {
         $a=$request->input('student');
         $length = DB::table('testlinkedlist')->count();
         $distance=$a['theindex']-$length;
         $b=$a['theindex'];
        if($distance>1)
        {
            return view('testlinkedlist.false');

        }
        else if($distance==1)
        {
            DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
                ,    [$b,$a['value']]);
            return view('testlinkedlist.return');
        }
        else
        {
//            DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
//                ,    [$length+1,$a['value']]);
            for($i=$length;$i>=$b;$i--)
            {
                DB::table('testlinkedlist')
                    ->where('theindex',$i)
                    ->increment('theindex');
            }
            DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
                ,    [$b,$a['value']]);
//       $data=DB::table('testlinkedlist')
//           ->select('value')
//           ->where('theindex',$b)
//           ->get();
//       DB::table('testlinkedlist')
//           ->where('theindex',$b)
//           ->update(['value'=>$a['value']]);
//            DB::table('testlinkedlist')
//                ->where('theindex',$b)
//                ->update(['value'=>$a['value']]);
          //  echo 'The value you inserted is '.$a['value'].'and the index is '.$a['theindex'];
//
            return view('testlinkedlist.return');
        }

     }
     public function constructTwo(Request $request)
     {
         $a=$request->input('content');
         $new=str_replace("\n",' ',$a);
         $names=explode(' ' ,$new);
       //  $names= split("<br/> ",$a);
         $numberOfCount=count($names);
         $length=DB::table('testlinkedlist')->count();
         for($i=$length;$i<$numberOfCount+$length;$i++)
         {    $k=0;
             $j=$i+1;
             DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
                 ,    [$j,$names[$k]]);
             $k++;
         }

               return view('testlinkedlist.return');
     }

}
/**
 * Created by PhpStorm.
 * User: maomao
 * Date: 2017/4/2
 * Time: 11:12
 */